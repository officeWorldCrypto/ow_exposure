<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;
use App\DAO\Firebird\EI\VersionDAO;
use App\DAO\Firebird\EI\SystemOptionsDAO;
use App\DAO\Firebird\EI\TokenDAO;
use App\DAO\Firebird\EI\UpdateDAO;
use App\Library\LanguageUtils;
use App\Helpers\UploadHelper;

final class VersionController
{

    private $company;

    // default list
    public function getVersion(Request $request, Response $response, array $args): Response
    {
        $resp_data = $this->getAllData();
        $response = $response->withJson([
            "data" => $resp_data,
            "message" => "Last versions"
        ]);
        return $response;
    }
    
    // most sensible 
    public function getVersionSecret(Request $request, Response $response, array $args): Response
    {
        $pass = $args['secret'];
        $resp_data = $this->getAllData();
        $dados['data'] = $resp_data;
        $myPass = (getenv('EI_SECRET')) ? getenv('EI_SECRET') : '0';
        $workspace = '';
        if ($pass == $myPass) {

            //---- start staffid getInfo
            $headerInfo = $this->_headerInfo($request, $response, $args);
            
            $workspace = $headerInfo['workspace'];
            $token = $headerInfo['token'];
            $staffid = $headerInfo['staffid'];
            $staffidSec = $headerInfo['staffidSec'];
            $staffidInitial = $headerInfo['staffidInitial'];
            
            //---- end staffid getInfo
            $dados['workspace'] = $workspace;
            $dados['user']['token'] = $token;
            $dados['user']['staffid_fromtoken'] = $staffid;
            $dados['user']['staffid_secondary'] = $staffidSec;
            $dados['user']['staffid_initial'] = $staffidInitial;
            
            $dados["system"] = $this->dataInfo();
            $dados["company"] = $this->company;
            $dados["database"] = getenv('EI_DATABASE');
            $dados['directories']['upload'] = getenv('EI_UPLOAD');
            $dados['directories']['download'] = getenv('EI_UPLOAD') . '/../download/';
            $dados['directories']['workspaces_database_path'] =  getenv('EI_WORKSPACES_DATABASE_PATH');
            
            $dados['urls'] = $this->urls();

            $dados['modules']['exec'] = $this->_is_execEnabled() ? 'Enabled' : 'Disabled';
           

        } else {
            
        }
        $dados["message"] = "Last versions with system data";
        $response = $response->withJson($dados);
        return $response;
    }

    public function getUrls(Request $request, Response $response, array $args): Response {
        //---- start staffid getInfo
        $headerInfo = $this->_headerInfo($request, $response, $args);
        $workspace = $headerInfo['workspace'];
        $token = $headerInfo['token'];
        $staffid = $headerInfo['staffid'];
        $staffidSec = $headerInfo['staffidSec'];
        $staffidInitial = $headerInfo['staffidInitial'];
        $urls = $this->urls();
        $dados['urls'] = $urls;
        $workspace_path = '/';
        if ($workspace!=''){
            $workspace_path = '/' . $workspace;
        }
        if ($workspace=='unknow') {
            $workspace_path = '';
        }
        // Upload url => example: 
        // 1- personal => https://criativa.app/work/servers/sei1/gestorequipes/uploads/usuario/activities/
        // 2- company  => https://criativa.app/work/servers/sei2021ws/uploads/activities/
        $urls['activity_upload'] = $urls['upload'] . $workspace_path . '/' . UploadHelper::get_upload_path_by_type('activity');
        $urls['task_upload'] = $urls['upload'] . $workspace_path . '/' . UploadHelper::get_upload_path_by_type('task');
        $urls['project_upload'] = $urls['upload'] . $workspace_path . '/' . UploadHelper::get_upload_path_by_type('project');
        $urls['staff_profile_upload'] = $urls['upload'] . $workspace_path . '/'.UploadHelper::get_upload_path_by_type('staff');
        $urls['company_upload'] = $urls['upload'] . $workspace_path . '/'.UploadHelper::get_upload_path_by_type('company');
        $urls['client_upload'] = $urls['upload'] . $workspace_path . '/'.UploadHelper::get_upload_path_by_type('client');
        $urls['ticket_upload'] = $urls['upload'] . $workspace_path . '/'.UploadHelper::get_upload_path_by_type('ticket');
        $urls['expense_upload'] = $urls['upload'] . $workspace_path . '/'.UploadHelper::get_upload_path_by_type('expense');
        $urls['leads_upload'] = $urls['upload'] . $workspace_path . '/'.UploadHelper::get_upload_path_by_type('leads');
        $urls['discussion_upload'] = $urls['upload'] . $workspace_path . '/'.UploadHelper::get_upload_path_by_type('discussion');
        $urls['cashflow_upload'] = $urls['upload'] . $workspace_path . '/'.UploadHelper::get_upload_path_by_type('cashflow');
        $urls['knowledge_base_upload'] = $urls['upload'] . $workspace_path . '/'.UploadHelper::get_upload_path_by_type('knowledge_base');
        $resp_data['urls'] = $urls;
        $response = $response->withJson([
            "data" => $resp_data,
            "message" => "List of urls by workspace"
        ]);
        return $response;
    }

    function urls(){
        // Getting informations from database webmodule TBLOptions 
        $systemOptionsDAO = new SystemOptionsDAO();
        $base_url = $systemOptionsDAO->getOptionValueById('base_url');
        $main_domain = $systemOptionsDAO->getOptionValueById('main_domain');
        $data['workspace_manager'] = getenv('EI_BASE_WORKSPACE_URL');
        $data['root'] = getenv('EI_BASE_URL');
        $data['download'] = getenv('EI_DOWNLOAD_URL');            
        $data['upload'] = getenv('EI_UPLOAD_URL') ?? '';
        $data['webmodule'] = getenv('EI_BASE_WEBMODULE_URL');
        $data['webmodule_admin'] = getenv('EI_BASE_WEBMODULE_URL') . '/admin';
        $data['webmodule_cfg_base_url'] = $base_url;
        $data['webmodule_cfg_main_domain'] = $main_domain;
        return $data;
    }
    

    function _headerInfo(Request $request, Response $response, array $args){
        $auth = new AuthController();
        $staffid = $auth->loginProfileGet($request,$response,$args);
        $dataHeader = $request->getHeaders();
        $workspace = isset( $dataHeader['HTTP_WORKSPACE'][0] ) ? $dataHeader['HTTP_WORKSPACE'][0] : 'unknow';

        if (isset($dataHeader['HTTP_AUTHORIZATION'][0])){
            $token = trim($dataHeader['HTTP_AUTHORIZATION'][0]);
            if (strpos(' ' . $token,'Bearer') == 1){
                $token = trim(substr($token,6));         
            }
            $staffidInitial = $staffid;
            $staffidSec = $auth->loginProfileGet($request,$response,$args);
            $tokenDAO = new TokenDAO();
            $resp = $tokenDAO->getDataFromToken($token);   
            /* in resp have a field with id ----> staffid */
            if (isset($resp[0])){
                $resp[0] = array_change_key_case( $resp[0], CASE_LOWER );
                $staffid = $resp[0]['staffid'];
            }
            else
            {
                $staffid = 0;
            }   
        }
        else
        {
            $token = 'Not found authorization key into header';
            $staffid = 0;
            $staffidSec = 0;
            $staffidInitial = 0;
        }
        $resp['workspace'] = $workspace;
        $resp['token'] = $token;
        $resp['staffid'] = $staffid;
        $resp['staffidSec'] = $staffidSec;
        $resp['staffidInitial'] = $staffidInitial;
        return $resp;
    }

    function getAllData()
    {
        $versionDAO = new VersionDAO();
        $data_db = $versionDAO->getAll();
        $companyData = $versionDAO->getCompanyData();
        $companyData = array_change_key_case($companyData, CASE_LOWER);
        $this->company = $companyData;
        $data_db = array_change_key_case($data_db, CASE_LOWER);
        $resp_data = [];
        foreach ($data_db as $row) {
            $resp_data[] = array_change_key_case($row, CASE_LOWER);
        }        
        return $resp_data;
    }

    
    function dataInfo()
    {
        // to old php versions <7.3 retrocompatibility
        if (!function_exists('array_key_first')) {
            function array_key_first(array $arr) {
                foreach($arr as $key => $unused) {
                    return $key;
                }
                return NULL;
            }
        }
        // result
        return [
            'version' => array_key_first($this->changeLog()),
            'software' => '[officeWorld] exposure -> Content exposure data (api)',
            'language' => LanguageUtils::l('language'),
            'last_update_version' => substr($this->changeLog()[array_key_first($this->changeLog())],0,10),
            'change_log' => $this->changeLog(),

        ];
    }

    function _is_execEnabled() {
        $exec_enabled =
        function_exists('exec') &&
            !in_array('exec', array_map('trim', explode(', ', ini_get('disable_functions')))) &&
            strtolower(ini_get('safe_mode')) != 1;
        return ($exec_enabled);
    }

    function changeLog()
    {
        $versionDAO = new VersionDAO();
        $changes = $versionDAO->getChangeLog();
        return $changes;
    }

}