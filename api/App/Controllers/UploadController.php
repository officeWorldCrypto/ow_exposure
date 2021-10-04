<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;
use Slim\Http\Stream;

use App\Library\StrUtils;
use App\Controllers\AuthController;
use Slim\Http\UploadedFile;
use App\Helpers\UploadHelper;
use App\Helpers\FilesHelper;
use App\Models\Firebird\EI\FileModel;
use App\DAO\Firebird\EI\FileDAO;

class UploadController {

    private $staffid;
    private $autoInc;    
    private $request;
    private $response;
    private $args;

    public function __construct(){    
        $this->staffid = null;        
    }



/**
     * Get the value of reponse
     */ 
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set the value of reponse
     *
     * @return  self
     */ 
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get the value of reponse
     */ 
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set the value of reponse
     *
     * @return  self
     */ 
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }

    /**
     * Get the value of args
     */ 
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Set the value of args
     *
     * @return  self
     */ 
    public function setArgs($args)
    {
        $this->args = $args;

        return $this;
    }

    public function setStaffid($staffid){
        $this->staffid = $staffid;
        return $this;
    }
    
    public function getStaffid($staffid){
        return $this->staffid;
    }


    public function upload( Request $request, Response $response, array $args): Response {
               
        $this->setRequest($request);
        $this->setResponse($response);
        $this->setArgs($args);
        
        $directory = getenv('EI_UPLOAD'); 
        $directory = $directory . '/inbox';
        
        $uploadedFiles = $request->getUploadedFiles();
        $id = '';
        $infolder = '';
        $workspace = '';
        // Headers
        $dataHeader = $request->getHeaders();
        $workspace = $dataHeader['HTTP_WORKSPACE'][0] ?? '';

        $data = $request->getParsedBody();
        // folder (activity, tasks, etc...)
        if (isset($data['folder'])){
            $infolder = $data['folder'];            
            $directory = ($workspace!='')?
                UploadHelper::get_upload_path_workspace_by_type($workspace, $data['folder']):
                UploadHelper::get_upload_path_default_by_type($data['folder']);
            if (!$directory){
                $result["workspace"] = $workspace;
                $result["message"] = 'Error uploading file';
                $result["error"] = 'Invalid folder name';
                $result["id"] = $id;
                $result["folder"] = $infolder;
                $result['data'] = [];
                $response = $response->withstatus(500)->withjson($result);
                return $response;
            }
        }
        $this->setStaffid($data['staffid'] ?? $this->_getStaffFromHeader( $request ));
        // id
        if (isset($data['id'])){
            $id = $data['id'];
            $directory = $directory . $data['id'] . '/';
        }
        // handle single input with single file upload
        $uploadedFile = $uploadedFiles['file'];
        // if don't error
        if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
            try {
                $filename = $this->moveUploadedFile($directory, $uploadedFile);
                $info = [];
                $info["file"] = $filename;
                $fileModel = new FileModel();
                $fileModel->setRel_id($id);
                $fileModel->setRel_type($infolder);
                $fileModel->setFile_name($filename);
                $fileModel->setFiletype($uploadedFile->getClientMediaType());
                $fileModel->setStaffid($this->staffid);
                $fileModel->setVisible_to_customer(0);
                $result = $this->setUploadFileRegister($fileModel,$infolder);
                $response = $response->withjson([
                    "id" => $id,
                    "folder" => $infolder,
                    "info" => $info,
                    'data' => $result]);
            } catch (\Exception $e) {
                $result["workspace"] = $workspace;
                $result["message"] = 'Error uploading file';
                $result["error"] = $e->getMessage();
                $result["id"] = $id;
                $result["folder"] = $infolder;
                $result['data'] = [];
                $response = $response->withstatus(500)->withjson($result);
            }
        }
        else
        {
            $result["message"] = 'Error uploading file';
            $reuslt["error"] = $uploadedFile->getError();
            $result["id"] = $id;
            $result["folder"] = $infolder;
            $result["data"] = [];
            $response = $response->withstatus(500)->withjson(['data'=>$result]);
        }
        return $response;
    }

    /**
     * Moves the uploaded file to the upload directory and assigns it a unique name
     * to avoid overwriting an existing uploaded file.
     *
     * @param string $directory directory to which the file is moved
     * @param UploadedFile $uploadedFile file uploaded file to move
     * @return string filename of moved file
     */
    function moveUploadedFile($directory, UploadedFile $uploadedFile)
    {       
        UploadHelper::maybe_create_upload_path($directory);
        $filename = $uploadedFile->getClientFilename();
        $filename = FilesHelper::unique_filename($directory, $filename);
        $uploadedFile->moveTo($directory . DIRECTORY_SEPARATOR . $filename);
        return $filename;
    }

    /** 
    * Direct data to respective DAO, because exists many tables TBLFILES,
    * and the system save to respective local (ex. TBLACTIVITYREPORTFILES)
    * @param FileModel $file default object fileModel type
    * @param string infolder = folder to save respective file
    * @return array of data resulted from insert routine
    */
    function setUploadFileRegister( FileModel $file, $infolder ) { 
        
        switch ($infolder) {
            case 'inbox':                
            break;
            case 'lead':
            break;
            case 'activity':
                $activityFileController = new ActivityFileController();
                return $activityFileController->insertFile( $file, 
                      $this->getRequest(), 
                      $this->getResponse(), 
                      $this->getArgs() );
            break;
            default:
                $fileDAO = new FileDAO();
                return $fileDAO->insert($file);
        }
        
    }

    private function _getStaffFromHeader(){
        $staffController = new StaffController();
        return $staffController->id($this->getRequest());
    }
   
   
   // exemplo [GET] {{base_url}}/download/activity/1/bazar11052019-4.png 
   // exemplo [GET] {{base_url}}/download/workspacename-activity/1/bazar11052019-4.png 
   public function download( Request $request, Response $response, array $args): Response {
        $folder = $args['folder'] ;
        $id = $args['id'];
        $file = $args['file'];
        $withWorkspace = strpos($folder, '-');
        $workspaceName = '';
        if ($withWorkspace){
            $workspaceName = substr($folder,0,$withWorkspace);
            $folder = substr($folder,$withWorkspace+1);
        }
        $this->setRequest($request);
        $this->setResponse($response);
        $this->setArgs($args);
        $this->getFile( $workspaceName, $folder, $id, $file );
        $response = $this->getResponse($response);
        return $response;
   }
    
   // Efetivamente retorna um arquivo
   public function getFile( $workspaceName, $folder, $id = 0, $file ) {
 
        $request = $this->getRequest();
        $response = $this->getResponse();
        $args = $this->getArgs();

        // Workspace via header
        $dataHeader = $request->getHeaders();
        $workspace = $dataHeader['HTTP_WORKSPACE'][0] ?? '';

        // Workspace via parametro
        if ($workspaceName!=''){
            $workspace = $workspaceName;
        }

        $directory = ($workspace!='')?
            UploadHelper::get_upload_path_workspace_by_type($workspace, $folder):
            UploadHelper::get_upload_path_default_by_type($folder);

        if ($id > 0){
            // ex. /uploads/valmor/staff_profile/1/file.png
            $_file = $directory . $id . '/' . $file;
        }
        else
        {
            $_file = $directory . '/' . $file;
        }

        // If not exists, can locate with prefix thumb_
        if (file_exists($_file)) {
	       $directory = $_file;
        } else {
            if ($id > 0){
                // ex. /uploads/valmor/staff_profile/1/thumb_file.png
                $_file = $directory . $id . '/thumb_' . $file;
            }
            else
            {
                $_file = $directory . '/thumb_' . $file;
            }
            $directory = $_file;
        }
        
        //var_dump($directory);die;
        //$loadImage = getenv('EI_UPLOAD') . '/cosems_top.png';
        $loadImage = $directory;
        $contType = mime_content_type($loadImage);
        $fh = fopen($loadImage, 'rb');
        $stream = new Stream($fh);
      
        $response = $response
            ->withHeader('Content-Type', $contType)
            ->withHeader('Content-Transfer-Encoding', 'Binary')
            ->withHeader('Content-Length', filesize($loadImage))
            ->withHeader('Expires', '0')
            ->withHeader('Cache-Control', 'must-revalidate, post-check=0, pre-check=0')
            ->withHeader('Pragma', 'public')
            ->withBody($stream);

        $this->setResponse($response);
        return true;

   }

   public function getFilePath(Request $request, $folder ){
        $workspace = '';
        // Headers
        $dataHeader = $request->getHeaders();
        $workspace = $dataHeader['HTTP_WORKSPACE'][0] ?? '';
        $directory = ($workspace!='')?
        UploadHelper::get_upload_path_workspace_by_type($workspace, $folder):
        UploadHelper::get_upload_path_default_by_type($$folder);
        return $directory;
   }


}