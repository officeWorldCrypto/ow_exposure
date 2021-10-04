<?php

namespace App\DAO\MySQL\SaudeRede;

use App\Models\MySQL\SaudeRede\CityModel;

class CityDAO extends Conexao 
{

    public function __construct(){       
        parent::__construct();
    }

    public function getAll(): array {
        $cities = $this->pdo
             ->query( 'SELECT * FROM TBLCITY')
             ->fetchAll(\PDO::FETCH_ASSOC); 
        $data = [];
        foreach($cities as $row){
            $data[] = $row;
        }
        return $data;
    }

    public function getQuery( $args ): array {
        $sth = $this->pdo->prepare( 
            'SELECT * FROM TBLCITY
            WHERE NAME LIKE :name');
        $sth->bindParam('name', $args['name'], \PDO::PARAM_STR);
        $sth->execute();
        $cities = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $data = [];
        foreach($cities as $row){
            $data[] = $row;
        }
        return $data;
    }

    public function getById( $args ): array {
        $sth = $this->pdo->prepare( 
            'SELECT * FROM TBLCITY
            WHERE ID = :id');
        $sth->bindParam('id', $args['id'], \PDO::PARAM_STR);
        $sth->execute();
        $cities = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $data = [];
        foreach($cities as $row){
            $data[] = $row;
        }
        return $data;
    }


    public function insert( CityModel $city ): array {
        $statement = $this->pdo
            ->prepare('INSERT INTO TBLCITY
               (                    
                    NAME,
                    STATE                 
               ) 
               VALUES
               (    
                    :name, 
                    :state
                )' 
                );

        $statement->execute([
            'name' => $city->getName(),
            'state' => 'RS'
        ]);
        //$this->pdo->commit();
        return ['Ok:' . $city->getName()];
    }

    public function getIdByName( String $name ): int {
        $sth = $this->pdo
           ->prepare( 'SELECT ID FROM 
               TBLCITY
               WHERE NAME = :name ');
        $sth->bindParam('name', $name, \PDO::PARAM_STR);
        $sth->execute();
        $city = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $data = 0;
        foreach($city as $row){
            $data = $row['ID'];
        }
        return $data;
    }


    public function teste(){
        $cidades = $this->pdo
             ->query( 'SELECT * FROM TBLCITY')
             ->fetchAll(\PDO::FETCH_ASSOC);

        echo '<pre>';
        foreach($cidades as $row){
            var_dump($row);
        }
        die;       

    }

}