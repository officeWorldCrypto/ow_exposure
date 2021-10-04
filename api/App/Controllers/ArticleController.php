<?php 

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Http\Response as Response;
use App\DAO\Firebird\EI\ArticleDAO;
use App\DAO\Firebird\EI\FileDAO;
use App\DAO\Firebird\EI\SystemOptionsDAO;
use App\Models\Firebird\EI\ArticleModel;
use App\Library\StrUtils;

final class ArticleController{

    private $utils;
        
    public function __construct(){
        $this->utils = new StrUtils();
    }

    public function getAll( Request $request, Response $response, array $args): Response {        
        $limit=0;
        $ArticleDAO = new ArticleDAO();
        $data_db = $ArticleDAO->getAll();
        if ($data_db){
            $records = count($data_db);
            $result = [];
            foreach ( $data_db as $item )
               $result[] = array_change_key_case( $item, CASE_LOWER );
            $response = $response->withJson([
                "data" => $result,
                "message" => "Articles",
                "records" => $records
                ]);
        }
        return $response;
    }

    public function getAllHeaders( Request $request, Response $response, array $args): Response {        
        $limit=0;
        $ArticleDAO = new ArticleDAO();
        $data_db = $ArticleDAO->getAllHeaders();
        if ($data_db){
            $records = count($data_db);
            $result = [];
            foreach ( $data_db as $item )
               $result[] = array_change_key_case( $item, CASE_LOWER );
            $response = $response->withJson([
                "data" => $result,
                "message" => "Articles headers list",
                "records" => $records
                ]);
        }
        return $response;
    }

    // getArticleURLsById
    // route example: - [GET] /articles/url/1
    public function getArticleURlsById( Request $request, Response $response, array $args): Response {
        //simple text - 'knowledge_base/text/'
        //external link - 'knowledge-base/article/'
        return $response;
    }

    // route example: - [GET] /articles/1
    public function getArticleById( Request $request, Response $response, array $args): Response {
        $query = $args['id'];
        $ArticleDAO = new ArticleDAO();
        $systemOptionsDAO = new SystemOptionsDAO();
        $base_url = $systemOptionsDAO->getOptionValueById('base_url');
        $data_db = $ArticleDAO->getById($query);
        if ($data_db){
            $records = count($data_db);
            $result = [];            
            foreach ( $data_db as $item ) {
               if (isset($base_url)) {
                  $item['url_simple'] = $base_url . 'knowledge_base/text/' . $item['SLUG'];
                  $item['url_share'] = $base_url . 'knowledge-base/article/' . $item['SLUG'];
               }
               else
               {
                  $item['url_simple'] = "TBLOPTIONS - Undefined option: base_url";
                  $item['url_share'] = "TBLOPTIONS - Undefined option: base_url";
               }
               $item = array_change_key_case( $item, CASE_LOWER );
               $item['attachments'] = $this->getAttachmentsById($item['articleid']);
               $result[] = $item;
            }
            $response = $response->withJson([
                "data" => $result,
                "message" => "Article information from database (Id={$query})",
                "records" => $records
                ]);
        }
        return $response;
    }

    function getAttachmentsById($rel_id){
        $rel_type = 'knowledge_base';
        $fileDAO = new FileDAO();
        $files = $fileDAO->getByRelation($rel_type, $rel_id);
        $filesResult = [];
        foreach ($files as $row){
            $filesResult[] = array_change_key_case( $row, CASE_LOWER );
        }
        return $filesResult;
    }
   
    public function insert( Request $request, Response $response, array $args): Response {
        $data = $request->getParsedBody();
        if (!isset($data['index'])){
            $data['index']=0;
        }
        $ArticleDAO = new ArticleDAO();        
        $data_db = $ArticleDAO->insert($data);
        if (isset($data_db)){
            $records = count($data_db);
            $result = [];
            foreach ( $data_db as $item ){
                $res_item = array_change_key_case( $item, CASE_LOWER );   
                $res_item['index'] = $data['index'];
                $result[] = $res_item;
             }
            $response = $response->withJson([
                "data" => $result,
                "message" => "New article data subject inserted",
                "records" => $records
                ]);
        }
        return $response;
    }

    public function update( Request $request, Response $response, array $args): Response {
        
        $data = $request->getParsedBody();
        if (!isset($data['index'])){
            $data['index']=0;
        }
        $ArticleDAO = new ArticleDAO();
        $data_db = $ArticleDAO->update($data);
        if (isset($data_db)){
            $records = count($data_db);
            $result = [];
            foreach ( $data_db as $item ){
               $res_item = array_change_key_case( $item, CASE_LOWER );   
               $res_item['index'] = $data['index'];
               $result[] = $res_item;
            }
            $response = $response->withJson([
                "data" => $result,
                "message" => "Article updated (Id={$data['id']})",
                "records" => $records
                ]);
        }
        return $response;
    }


    public function patch_description( Request $request, Response $response, array $args): Response {
        $data = $request->getParsedBody();
        if (!isset($data['index'])){
            $data['index']=0;
        }
        $ArticleDAO = new ArticleDAO();
        $data_db = $ArticleDAO->patch_description($data);
        if (isset($data_db)){
            $records = count($data_db);
            $result = [];
            foreach ( $data_db as $item ){
               $res_item = array_change_key_case( $item, CASE_LOWER );   
               $res_item['index'] = $data['index'];
               $result[] = $res_item;
            }
            $response = $response->withJson([
                "data" => $result,
                "message" => "Article patch Description (Id={$data['id']})",
                "records" => $records
                ]);
        }
        return $response;
    }

    public function patch_subject( Request $request, Response $response, array $args): Response {
        $data = $request->getParsedBody();
        if (!isset($data['index'])){
            $data['index']=0;
        }
        $ArticleDAO = new ArticleDAO();
        $data_db = $ArticleDAO->patch_subject($data);
        if (isset($data_db)){
            $records = count($data_db);
            $result = [];
            foreach ( $data_db as $item ){
               $res_item = array_change_key_case( $item, CASE_LOWER );   
               $res_item['index'] = $data['index'];
               $result[] = $res_item;
            }
            $response = $response->withJson([
                "data" => $result,
                "message" => "Article patch Subject (Id={$data['id']})",
                "records" => $records
                ]);
        }
        return $response;
    }
 
    public function delete( Request $request, Response $response, array $args): Response {
        $data = $request->getParsedBody();
        if (!isset($data['index'])){
            $data['index']=0;
        }
        $ArticleDAO = new ArticleDAO();
        $ArticleDAO->delete($data);
        $response = $response->withJson([
            "data" => $data,
            "message" => "Article deleted (id=0)"]);
        return $response;
    }
}