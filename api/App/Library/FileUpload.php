<?php 

namespace App\Library;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


final class FileUpload {
    
    private $userId;
    private $request;
    private $destPath;
    private $destFolder;
    private $originField;

    public function __construct( Request $request ){
        $this->utils = new StrUtils();
        $this->request = $request;
        $this->destFolder = "/attachments";
        $this->destPath = getEnv('EI_UPLOAD') . $this->destFolder;
        $this->originField = 'photo';
    }

    public function processUpload() {
        $photo = "";
        if ($this->request){           
            $data = $this->request->getParsedBody();
            $files = $this->request->getUploadedFiles();
            if ($files){
               $image = $files[$this->originField];
            }
        }
        if (isset($image)){
            if ($image->getError() === UPLOAD_ERR_OK){
                $uploadFileName = $image->getClientFileName();
                $tofile = $this->destPath . '/' . $uploadFileName;
                $image->moveTo( $tofile );
                return $uploadFileName;
            }
            else
            {
                return 'error:'.$image->getError();
            }
        } else {
            return null;
        }
    }

    /**
     * Get the value of request
     */ 
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set the value of request
     *
     * @return  self
     */ 
    public function setRequest($request)
    {
        $this->request = $request;

        return $this;
    }



    /**
     * Get the value of destPath
     */ 
    public function getDestPath()
    {
        return $this->destPath;
    }

    /**
     * Set the value of destPath
     *
     * @return  self
     */ 
    public function setDestPath($destPath)
    {
        $this->destPath = $destPath;

        return $this;
    }

    /**
     * Get the value of originField
     */ 
    public function getOriginField()
    {
        return $this->originField;
    }

    /**
     * Set the value of originField
     *
     * @return  self
     */ 
    public function setOriginField($originField)
    {
        $this->originField = $originField;

        return $this;
    }

    /**
     * Get the value of destFolder
     */ 
    public function getDestFolder()
    {
        return $this->destFolder;
    }

    /**
     * Set the value of destFolder
     *
     * @return  self
     */ 
    public function setDestFolder($destFolder)
    {
        $this->destFolder = $destFolder;
        $this->setDestPath($this->destPath = getEnv('EI_UPLOAD') . $this->destFolder);
        return $this;
    }
}