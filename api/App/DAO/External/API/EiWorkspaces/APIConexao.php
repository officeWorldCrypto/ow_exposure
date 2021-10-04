<?php

namespace App\DAO\External\API\EiWorkspaces;

abstract class APIConexao {

    private $api_token;
    private $url;
        
    function __construct( $token ){
        $this->api_token = $token;
    }

    /* get from URI */
    function get( $method ){

        //'token='.$this->api_token
        $data['token'] = $this->api_token;
        $result = \Httpful\Request::get($this->url.$method)
           ->addHeaders($data)
           ->send();         
        $result = json_decode($result);
        return $result;
    }


    /* post into URI */
    function post($method, $body){
        $data['token'] = $this->api_token;
        $data['Content-Type'] = 'multipart/form-data';
        $result = \Httpful\Request::post($this->url.$method)
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

