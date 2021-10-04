<?php

namespace App\DAO\MySQL\SaudeRede;
use App\Models\MySQL\SaudeRede\CompanyModel;

class CompanyDAO extends Conexao
{

    public function __construct(){
         
        parent::__construct();
    }

    public function getAll(): array {
        $cities = $this->pdo
             ->query( 'SELECT * FROM TBLCOMPANY')
             ->fetchAll(\PDO::FETCH_ASSOC); 
        $data = [];
        foreach($cities as $row){
            $data[] = $row;
        }
        return $data;
    }

    public function getIdByName( String $name ): int {
        $sth = $this->pdo
           ->prepare( 'SELECT ID FROM 
               TBLCOMPANY 
               WHERE NAME = :name ');
        $sth->bindParam('name', $name, \PDO::PARAM_STR);
        $sth->execute();      
        $company = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $data = 0;
        foreach($company as $row){
            $data = $row['ID'];
        }
        return $data;
    }


    public function insert( CompanyModel $company ): array {
        $statement = $this->pdo
            ->prepare('INSERT INTO TBLCOMPANY
               (                    
                    NAME
                                     
               ) 
               VALUES
               (    
                    :name
                    
                )' 
                );

        $statement->execute([
            'name' => $company->getName()
            
        ]);
        //$this->pdo->commit();
        return ['Ok:' . $company->getName()];
    }
    

    public function teste(){
        $cidades = $this->pdo
             ->query( 'SELECT * FROM TBLCOMPANY')
             ->fetchAll(\PDO::FETCH_ASSOC);

        echo '<pre>';
        foreach($cidades as $row){
            var_dump($row);
        }
        die;      

    }

}