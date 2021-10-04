<?php

namespace App\DAO\MySQL\SaudeRede;

use App\Models\MySQL\SaudeRede\HealthSpecialtyModel;

class HealthSpecialtyDAO extends Conexao 
{

    public function __construct(){       
        parent::__construct();
    }

    public function getAll(): array {
        $healthSpecialty = $this->pdo
             ->query( 'SELECT * FROM TBLHEALTHSPECIALTY')
             ->fetchAll(\PDO::FETCH_ASSOC); 
        $data = [];
        foreach($healthSpecialty as $row){
            $data[] = $row;
        }
        return $data;
    }

    public function getIdByName( String $name ): int {
        $sth = $this->pdo->prepare( 
            'SELECT ID FROM TBLHEALTHSPECIALTY
            WHERE NAME = :name');
        try {
            $sth->bindParam('name', $name, \PDO::PARAM_STR);
            $sth->execute();
            $healthSpecialty = $sth->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\Exception $e){
            var_dump( $name );
            var_dump( $e );
            die;
        }
        return $healthSpecialty[0]['ID'];
    }

    public function getQuery( $args ): array {
        $sth = $this->pdo->prepare( 
            'SELECT * FROM TBLHEALTHSPECIALTY
            WHERE NAME LIKE :name');
        $sth->bindParam('name', $args['name'], \PDO::PARAM_STR);
        $sth->execute();
        $healthSpecialty = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $data = [];
        foreach($healthSpecialty as $row){
            $data[] = $row;
        }
        return $data;
    }

    public function insert( HealthSpecialtyModel $healthSpecialty ): array {
        $statement = $this->pdo
            ->prepare('INSERT INTO TBLHEALTHSPECIALTY
               (                    
                    NAME                
               ) 
               VALUES
               (    
                    :name
                )' 
                );

        $statement->execute([
            'name' => $healthSpecialty->getName(),
        ]);
        //$this->pdo->commit();
        return ['Ok:' . $healthSpecialty->getName()];
    }
    
}