<?php

namespace App\DAO\MySQL\SaudeRede;

use App\Models\MySQL\SaudeRede\SpecialtyInstitutionModel;

class SpecialtyInstitutionDAO extends Conexao {

   
    public function __construct(){       
        parent::__construct();
    }

    public function getAll(): array {
        $institution = $this->pdo
             ->query( 'SELECT * FROM TBLSPECIALTYINSTITUTION')
             ->fetchAll(\PDO::FETCH_ASSOC); 
        $data = [];
        foreach($institution as $row){
            $data[] = $row;
        }
        return $data;
    }

    public function insert( SpecialtyInstitutionModel $specialtyInstitution ): array {
        $statement = $this->pdo
            ->prepare('INSERT INTO TBLSPECIALTYINSTITUTION
               (                    
                    HEALTHSPECIALTY_ID,
                    INSTITUTION_ID,
                    CITY_ID
                    
               ) 
               VALUES
               (    
                    :healthspecialty_id,
                    :institution_id,
                    :city_id
                    
                )' 
                );

        $statement->execute([
            'healthspecialty_id' => $specialtyInstitution->getHealthSpecialtyId(),
            'city_id' => $specialtyInstitution->getCityId(),
            'institution_id' => $specialtyInstitution->getInstitutionId()
        ]);
        //$this->pdo->commit();
        return ['Ok:' . $specialtyInstitution->getInstitutionId() . $specialtyInstitution->getHealthSpecialtyId() . $specialtyInstitution->getCityId() ];
    }
     

 


}
