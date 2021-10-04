<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;
use App\DAO\Firebird\EI\ActivityFileDAO;
use App\DAO\Firebird\EI\FileDAO;
use App\Models\Firebird\EI\FileModel;
use App\Library\StrUtils;

class FileController{

    private $utils;

    public function __construct(){
        $this->utils = new StrUtils();
    }

    public function getByKey( Request $request, Response $response, array $args): Response {
        try {
            $key = $args['key'];
            $fileDAO = new FileDAO();   
            $data_db = $fileDAO->getByKey($key);
            if (isset($data_db)){
                $records = count($data_db);
                $result = [];
                foreach ( $data_db as $item ){
                    $result = array_change_key_case($item, CASE_LOWER); 
                }            
                $response = $response->withJson(["data" => $result]);
            }
            if (count($result)<=0){
                $response = $response->withStatus(404)
                ->withJson(["error" => "Unknow file with key $key"]);
            }
        } catch (\Exception $e) {
            $_errorMessage = $e->getMessage();
            $response = $response->withStatus(500)
            ->withJson([
                "message" => "Unknow server error",
                "error" => "$_errorMessage"]);
        }
        return $response;
    }


    public function getByFolder( Request $request, Response $response, array $args): Response {
        try {
            $rel_type = $args['rel_type'];
            $rel_id = $args['rel_id'];
            $fileDAO = new FileDAO();   
            $data_db = $fileDAO->getByRelation($rel_type, $rel_id);
            if (isset($data_db)){
                $records = count($data_db);
                $result = [];
                foreach ( $data_db as $item ){
                    $result[] = array_change_key_case($item, CASE_LOWER); 
                }            
                $response = $response->withJson(["data" => $result]);
            }
            if (count($result)<=0){
                $response = $response->withStatus(404)
                ->withJson(["error" => "No files attachments found"]);
            }
        } catch (\Exception $e) {
            $_errorMessage = $e->getMessage();
            $response = $response->withStatus(500)
            ->withJson([
                "message" => "Unknow server error",
                "error" => "$_errorMessage"]);
        }
        return $response;
    }

    public function patchDetachByKey( Request $request, Response $response, array $args): Response {
        try {
            $key = $args['key'];
            $fileDAO = new FileDAO();   
            $data_db = $fileDAO->detachByKey($key);
            if ($data_db){                
                $response = $response->withJson(["data" => true]);
            } else {            
                $response = $response->withStatus(404)
                   ->withJson(["error" => "Unknow file with key $key"]);
            }
        } catch (\Exception $e) {
            $_errorMessage = $e->getMessage();
            $response = $response->withStatus(500)
            ->withJson([
                "message" => "Unknow server error",
                "error" => "$_errorMessage"]);
        }
        return $response; 
    }

    public function deleteByKey( Request $request, Response $response, array $args): Response {
        try {
            $key = $args['key'];
            $fileDAO = new FileDAO();   
            $data_db = $fileDAO->deleteByKey($key);
            if ($data_db){                
                $response = $response->withJson(["data" => true]);
            } else {            
                $response = $response->withStatus(404)
                   ->withJson(["error" => "Unknow file with key $key"]);
            }
        } catch (\Exception $e) {
            $_errorMessage = $e->getMessage();
            $response = $response->withStatus(500)
            ->withJson([
                "message" => "Unknow server error",
                "error" => "$_errorMessage"]);
        }
        return $response; 
    }
 
}