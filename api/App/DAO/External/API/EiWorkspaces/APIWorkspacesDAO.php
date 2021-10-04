<?php 

namespace App\DAO\External\API\EiWorkspaces;

class APIWorkspacesDAO extends APIConexao {

    public function __construct(){
        $url = getenv('EI_BASE_WORKSPACE_URL');
        $token = getenv('EI_TOKEN');
        parent::__construct($token);
        $this->setUrl($url);
    }

    public function getWorkspaceVersion()
    {
        $resposta = $this->get('/service/version');
        return (array) $resposta;
    }

    public function selectWorkspace( $userId, $deviceId, $workspaceName ){
        $data = [
            "userId" => $userId,
            "deviceId" => $deviceId,
            "workspaceName" => $workspaceName ];
        $resposta = $this->post('/service/selectworkspace', $data );
        return (array) $resposta;
    }

}