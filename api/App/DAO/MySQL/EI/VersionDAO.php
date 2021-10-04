<?php

namespace App\DAO\MySQL\SaudeRede;

class VersionDAO extends Conexao 
{

    public function __construct(){       
        parent::__construct();
    }

    public function getAll(): array {
        $cities = $this->pdo
             ->query( 'SELECT * FROM TBLVERSION')
             ->fetchAll(\PDO::FETCH_ASSOC);
        foreach($cities as $row){
            $data[] = $row;
        }
        return $data;
    }

}