<?php

namespace App\DAO\MySQL\SaudeRede;

use App\Models\MySQL\SaudeRede\InstitutionModel;

class InstitutionDAO extends Conexao 
{

    public function __construct(){       
        parent::__construct();
    }

    public function getAll(): array {
        $institution = $this->pdo
             ->query( 'SELECT * FROM TBLINSTITUTION')
             ->fetchAll(\PDO::FETCH_ASSOC); 
        $data = [];
        foreach($institution as $row){
            $data[] = $row;
        }
        return $data;
    }

    public function getIdByName(String $institution_name) {       
        // Basic data
        $sth = $this->pdo->prepare( 
            'SELECT ID FROM TBLINSTITUTION
            WHERE NAME = :name' );
        $sth->bindParam('name', $institution_name, \PDO::PARAM_STR);
        $sth->execute();
        $healthSpecialty = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $result = 0;
        //var_dump( '->'.$institution_name );
        foreach($healthSpecialty as $row){
            return $row['ID'];
        }
        return $result;
    }

    public function getQuery( $args ): array {
        if ($args['level']==0){
            // Basic data
            $sth = $this->pdo->prepare( 
                'SELECT * FROM TBLSPECIALTYINSTITUTION
                WHERE CITY_ID = :city
                 AND HEALTHSPECIALTY_ID = :healthspecialty' );
        }
        else if ($args['level']==1){
            // Stage 1 - Complete data
            $sth = $this->pdo->prepare( 
                'SELECT SI.*, TBLCITY.NAME AS CITY_NAME 
                FROM TBLSPECIALTYINSTITUTION SI
                LEFT OUTER JOIN TBLCITY ON SI.CITY_ID = TBLCITY.ID
                WHERE CITY_ID = :city
                 AND HEALTHSPECIALTY_ID = :healthspecialty'
                  );
        }
        else if ($args['level']==2){
            // Stage 2 - More Complete data
            $sth = $this->pdo->prepare( 
                'SELECT SI.*, 
                TBLCITY.NAME AS CITY_NAME,
                TBLINSTITUTION.NAME AS INSTITUTION_NAME
                FROM TBLSPECIALTYINSTITUTION SI
                LEFT OUTER JOIN TBLCITY ON SI.CITY_ID = TBLCITY.ID
                LEFT OUTER JOIN TBLINSTITUTION ON SI.INSTITUTION_ID = TBLINSTITUTION.ID
                WHERE SI.CITY_ID = :city
                 AND SI.HEALTHSPECIALTY_ID = :healthspecialty'
                  );
        }      
        else if ($args['level']==7){
            // Stage 7 - More Complete data
            $sth = $this->pdo->prepare( 
                'SELECT SI.*, 
                TBLCITY.NAME AS CITY_NAME,
                HS.NAME AS HEALTHSPECIALTY_NAME,
                I.NAME AS INSTITUTION_NAME,
                I.CNES AS INSTITUTION_CNES,
                I.ADDRESS AS INSTITUTION_ADDRESS,
                I.PHONE AS INSTITUTION_PHONE,
                I.CITY_ID AS INSTITUTION_CITY_ID,
                ICITY.NAME AS INSTITUTION_CITY_NAME,
                I.COMPANY_ID AS INSTITUTION_COMPANY_ID,
                IC.NAME AS INSTITUTION_COMPANY_NAME
                FROM TBLSPECIALTYINSTITUTION SI
                LEFT OUTER JOIN TBLCITY ON SI.CITY_ID = TBLCITY.ID
                LEFT OUTER JOIN TBLHEALTHSPECIALTY HS ON SI.HEALTHSPECIALTY_ID = HS.ID
                LEFT OUTER JOIN TBLINSTITUTION I ON SI.INSTITUTION_ID = I.ID
                LEFT OUTER JOIN TBLCITY ICITY ON I.CITY_ID = ICITY.ID
                LEFT OUTER JOIN TBLCOMPANY IC ON I.COMPANY_ID = IC.ID
                WHERE SI.CITY_ID = :city
                 AND SI.HEALTHSPECIALTY_ID = :healthspecialty'
                  );
        }
        $sth->bindParam('healthspecialty', $args['healthspecialty'], \PDO::PARAM_INT);
        $sth->bindParam('city', $args['city'], \PDO::PARAM_INT);
        $sth->execute();
        $healthSpecialty = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $data = [];
        foreach($healthSpecialty as $row){
            $data[] = $row;
        }
        return $data;
    }

    public function insert( InstitutionModel $institution ): array {
        $statement = $this->pdo
            ->prepare('INSERT INTO TBLINSTITUTION
               (                    
                    NAME,
                    CITY_ID,
                    COMPANY_ID,
                    CNES
               ) 
               VALUES
               (    
                    :name,
                    :city_id,
                    :company_id,
                    :cnes
                )' 
                );

        $statement->execute([
            'name' => $institution->getName(),
            'city_id' => $institution->getCityId(),
            'company_id' => $institution->getCompanyId(),
            'cnes' => $institution->getCNES(),
        ]);
        //$this->pdo->commit();
        return ['Ok:' . $institution->getName()];
    }
    
}