<?php

/*
API for manager data for website (Equipe Integrada App)
By Valmor Flores (valmorflores at gmail dot com)
2021, August
*/


use function src\jwtAuth;
use function src\slimConfiguration;
use App\Controllers\AuthController;
use App\Controllers\ArticleController;
use App\Controllers\ContactController;
use App\Controllers\ExceptionController;
use App\Controllers\FileController;
use App\Middlewares\JwtDateTimeMiddleware;
use App\Controllers\MessagesController;
use App\Controllers\MessagesGroupsController;
use App\Controllers\SearchController;
use App\Controllers\SystemMenuController;
use App\Controllers\SystemWorkspaceController;
use App\Controllers\StaffController;
use App\Controllers\VersionController;
use App\Controllers\UploadController;

// errors setup
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//

$c = slimConfiguration();

$app = new \Slim\App($c);

// This middleware will append the response header Access-Control-Allow-Methods with all allowed methods

$app->add(function ($req, $res, $next) {
    /* Database path from workspace via param */
    $data = $req->getHeaders();
    $workspace = isset( $data['HTTP_WORKSPACE'][0] ) ? $data['HTTP_WORKSPACE'][0] : 'unknow';
    if (!($workspace == 'unknow')){
        $path = getenv('EI_WORKSPACES_DATABASE_PATH');
        if ($path != ""){
            putenv('EI_DATABASE=' . $path . 'base_'.$workspace.'.fdb' );
        }
    }
    /* continue default process */ 
    $response = $next($req, $res);    
    //Put here all headers variables, ex. Workspace -> Access-Control-Allow-Headers
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Credentials', true)
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization, Workspace')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});



$app->group('/v1', function() use ($app) {
    // with middleware
    // JwtDateTimeMiddleware() // validation and  
    // jwtAuth()); //<-tuppola middleware, validate token

    $app->get('/teste', function($request,$response) { var_dump($request->getAttribute('jwt')); })
        ->add(new JwtDateTimeMiddleware()) 
        ->add(jwtAuth());    
    //----
    $app->post('/active', AuthController::class . ':active');
    //-- auth LOGIN/PROFILE
    $app->get('/articles/basic', ArticleController::class . ':getAllHeaders');
    $app->get('/articles/{id}', ArticleController::class . ':getArticleById');
    $app->get('/articles', ArticleController::class . ':getAll');    
    // Login e logou convencionais
    $app->get('/version', VersionController::class . ':getVersion');
    $app->get('/version/{secret}', VersionController::class . ':getVersionSecret');
    $app->get('/download/{folder}/{id}/{file}', UploadController::class . ':download');
});

//-- GROUP REQUIRE AUTHENTICATION
$app->group('/v1', function() use ($app) {
    //-- SEARCH
    $app->get('/search', SearchController::class . ':getExpression' );
    //-- CONTACT
    $app->post('/contacts', ContactController::class . ':postContact');
    $app->get('/contacts', ContactController::class . ':getContacts');
    $app->get('/contacts/{id}', ContactController::class . ':getById');
    $app->delete('/contacts/{id}', ContactController::class . ':deleteContact');
    //-- LOGIN
    $app->get('/login', AuthController::class . ':loginProfileGet');
    $app->post('/authenticate', AuthController::class . ':loginStaffOrClient');
    //-- STAFF
    $app->get('/staff', StaffController::class . ':getAll');
    $app->get('/staff/{id}', StaffController::class . ':getById'); 
    $app->get('/staff/{staffid}/image', StaffController::class . ':getProfileImage');
    //-- MESSAGE
    $app->get('/messages/conversations', MessagesController::class . ':getAllConversations');
    $app->get('/messages/conversation/{id}', MessagesController::class . ':getConversationWithStaff');
    $app->get('/messages/mygroups', MessagesGroupsController::class . ':getMyGroups');
    $app->get('/messages/groupmembers/{cid}', MessagesGroupsController::class . ':getGroupMembers');
    $app->get('/messages/{cid}', MessagesController::class . ':getMessagesByConversationId'); 
    $app->post('/messages/{cid}', MessagesController::class . ':postMessageByConversationId');
    //-- ARTICLE
    $app->post('/articles', ArticleController::class . ':insert');
    $app->put('/articles', ArticleController::class . ':update');
    $app->delete('/articles', ArticleController::class . ':deleteArticleById');
    //-- FILES 
    $app->get('/files/{key}', FileController::class . ':getByKey');
    $app->patch('/files/{key}/detach', FileController::class . ':patchDetachByKey');
    $app->delete('/files/{key}', FileController::class . ':deleteByKey');
    $app->get('/files/folder/{rel_type}/{rel_id}', FileController::class . ':getByFolder');

})->add(new JwtDateTimeMiddleware())
->add(jwtAuth());

//----
$app->run();
