<?php

namespace App\DAO\Firebird\EI;

class SystemOptionsDAO extends Conexao 
{

    public function __construct(){       
        parent::__construct();
    }

    public function getOptionValueById( $name )  {
        $statement = $this->pdo
            ->prepare('SELECT "VALUE" FROM TBLOPTIONS WHERE NAME = :aname' );
        $statement->bindParam('aname', $name );
        $statement->execute();
        $dados = $statement->fetchAll(\PDO::FETCH_ASSOC);
        if (count($dados) === 0)
           return null;
        return $dados[0]["VALUE"];
    }
}