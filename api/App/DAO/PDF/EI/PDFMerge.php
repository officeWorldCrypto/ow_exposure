<?php

namespace App\DAO\PDF\EI;

use App\DAO\PDF\EI\PDFConexao;

class PDFMerge extends PDFConexao {

    public function __construct(){       
        parent::__construct();
    }

    public function getList(){
       return $this->listFilesPDF;
    }

    public function runMerge(){
       return $this->merge();
    }

}



