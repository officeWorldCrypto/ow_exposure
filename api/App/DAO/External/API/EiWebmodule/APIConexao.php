<?php

namespace App\DAO\External\API\EiWebmodule;
use \Httpful\Request;

abstract class APIConexao {

    private $api_email;
    private $api_enckey;
    private $url;
        
    function __construct(){
        $this->api_enckey = getenv('EI_ADMIN_APP_ENC_KEY');
        $this->api_email = getenv('EI_ADMIN_EMAIL');
        $this->url = getenv('EI_BASE_WEBMODULE_URL');
    }

    function logged(){
        return true;
    }

    function login(){
        $authMethod = '/admin/authentication/do';
        $body['enckey'] = $this->api_enckey;
        $body['email'] = $this->api_email;
        $body['password'] = '';
        $result = $this->post( $authMethod, $body );
        return $result;
    }

    /* get from URI */
    function get($method){

        //'token='.$this->api_token
        $data['enckey'] = $this->api_enckey;
        $uri = $this->url.$method;
        $result = \Httpful\Request::get($uri)
           ->addHeaders($data)
           ->send();
               
        //var_dump($result->body);
        $result = json_decode($result);
        //var_dump($this->url.$method);
        //var_dump($result);           
        return $result;
    }


    /* post into URI */
    function post($method, $body){
        $data['enckey'] = $this->api_enckey;
        $body['enckey'] = $this->api_enckey;
        $data['Content-Type'] = 'multipart/form-data';
        $requestUrl = $this->url.$method;        
        $result = \Httpful\Request::post($requestUrl)
           ->addHeaders($data)
           ->body($body)
           ->sendsType(\Httpful\Mime::FORM)
           ->send();          
        $result = json_decode($result);                 
        return $result;
    }


    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}

