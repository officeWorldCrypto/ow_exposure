<?php

namespace App\Models\Firebird\EI;

class BaseModel {
  

    public function __construct(){       
        //
    }


    // Carrega campos de um json
    public function fromJson($data){
        if (isset($data)){
            foreach($data as $key => $val) {
                if(property_exists(__CLASS__,$key)) {
                    $this->$key = $val;
                }
            }
        }
    }

    public function toJson(){
       return get_object_vars($this);
    }

    // Carrega campos de array
    public function fromArray($data){
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
    
}