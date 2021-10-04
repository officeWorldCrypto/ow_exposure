<?php

namespace App\DAO\Firebird\EI;

class VersionDAO extends Conexao 
{

    public function __construct(){       
        parent::__construct();
    }

    public function getAll(): array {
        $versions = $this->pdo
             ->query( 'SELECT * FROM TBLVERSION')
             ->fetchAll(\PDO::FETCH_ASSOC);
        $data = [];
        foreach($versions as $row){
            $data[] = $row;
        }
        return $data;
    }

    public function getCompanyData() {
        $sql = 'SELECT * FROM TBLOPTIONS WHERE NAME = :aname ';             
        $statement = $this->pdo
            ->prepare( $sql ); 
        $fieldCompanyName = 'invoice_company_name';
        $statement->bindParam('aname',$fieldCompanyName);
        $statement->execute();
        $versions = $statement->fetchAll(\PDO::FETCH_ASSOC);
        $data = null;
        foreach($versions as $row){
            $data['name'] = $row['VALUE'];
            $data['option_id'] = $row['ID'];
            $data['option_name'] = $row['NAME'];
        }
        return $data;
    }

    public function getChangeLog(){
        $changes['v0.0.01'] = '04/10/2021\n' . 
                'First version';
      return $changes;
    }

}