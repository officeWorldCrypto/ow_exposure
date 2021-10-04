<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;
use App\DAO\Firebird\EI\TokenDAO;
use App\Library\StrUtils;


class BaseController {

    private $utils;
    private $staffid;

    public function __construct(){
        $this->utils = new StrUtils();
        $this->staffid = null;
    }

    function load( Request $request, Response $response, array $args){
        $auth = new AuthController();
        $this->staffid = $auth->loginProfileGet($request,$response,$args);
        $data = $request->getHeaders();
        $token = trim($data['HTTP_AUTHORIZATION'][0]);
        //remove bearer 
        if (strpos(' ' . $token,'Bearer') == 1)
            $token = trim(substr($token,6));         
        $tokenDAO = new TokenDAO();
        $resp = $tokenDAO->getDataFromToken($token);
        /* in resp have a field with id ----> staffid */
        if (isset($resp[0])){
            $resp[0] = array_change_key_case( $resp[0], CASE_LOWER );
            $this->staffid = $resp[0]['staffid'];
        }
        else
        {
            $this->staffid = 0;
        }
        
    }

    public function getStaffId(){
        return $this->staffid;
    }

}