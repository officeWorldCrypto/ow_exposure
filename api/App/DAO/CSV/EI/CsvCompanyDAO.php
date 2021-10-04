<?php

namespace App\DAO\CSV\SaudeRede;

class CsvCompanyDAO extends CsvConexao 
{

    public function __construct(){       
        parent::__construct();
    }

    public function previewImport(): array {
        return [];
    }

}