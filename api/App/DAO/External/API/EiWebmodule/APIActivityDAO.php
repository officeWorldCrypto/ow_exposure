<?php

namespace App\DAO\External\API\EiWebmodule;

class APIActivityDAO extends APIConexao {

    private $baseUrl;

    function __construct()
    {
        parent::__construct();
        $this->baseUrl = getenv('EI_BASE_WEBMODULE_URL');
    }

    function getActivityPdfReport($url) {
       $body['data'] = 'undefined';
       $resposta['request-0']['url'] = $this->baseUrl;
       $resposta['request-1']['send'] = 'login';
       $resposta['request-1']['response'] = $this->login();
       $resposta['request-2']['send:GET'] = $this->baseUrl . $url;
       $resposta['request-2']['response'] = $this->get($url);
       return $resposta;
    }


}