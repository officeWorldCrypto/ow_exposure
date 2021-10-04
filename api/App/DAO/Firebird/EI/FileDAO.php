<?php

namespace App\DAO\Firebird\EI;

use App\Library\GeneralUtils;
use App\Models\Firebird\EI\FileModel;

class FileDAO extends Conexao {


    private $staffid;
    private $autoInc;

    public function __construct(){
        parent::__construct();
        if (strpos( getenv('EI_AUTOINC'), 'FILES' )>=1){
            $this->setAutoInc(true);
        };
    }

    public function setAutoInc($autoinc){
        $this->autoInc = $autoinc;
        return $this;
    }
    
    public function getAutoInc(){
        return $this->autoInc;
    }

    public function insert(FileModel $fileModel){
        $timenow = date('H:i:s');
        $today = date('Y-m-d');
        $file_name = $fileModel->getFile_name();
        $filetype = $fileModel->getFiletype();
        $dateadded = $today;// $fileModel->getDateadded();
        $staffid = $fileModel->getStaffid();
        $rel_type = $fileModel->getRel_type();
        $rel_id = $fileModel->getRel_id();
        $attachment_key = GeneralUtils::app_generate_hash();
        $visible_to_customer = $fileModel->getVisible_to_customer();
        $timeadded = $timenow; //$fileModel->getTimeAdded();
        $idField = '';
        $idValue = '';
        if (!$this->getAutoInc()){
            $id = $this->get_next_id('TBLFILES','ID');
            $idField = 'ID,';
            $idValue = ':id,';
        }
        $cSQL = "INSERT INTO TBLFILES
            ( $idField
                FILE_NAME,
                FILETYPE,
                DATEADDED,               
                TIMEADDED,
                REL_TYPE,
                REL_ID,
                STAFFID,
                ATTACHMENT_KEY
                )
            VALUES (
              $idValue
                :file_name,
                :filetype,
                :dateadded,
                :timeadded,
                :rel_type,
                :rel_id,
                :staffid,
                :attachment_key
                )
            RETURNING ID
                ";
                
        $statement = $this->pdo
            ->prepare( $cSQL );

        if (!$this->getAutoInc()){
           $statement->bindParam('id', $id);
        }
        $statement->bindParam('file_name', $file_name);
        $statement->bindParam('filetype', $filetype);
        $statement->bindParam('dateadded', $dateadded);
        $statement->bindParam('timeadded', $timeadded);
        $statement->bindParam('rel_type', $rel_type);
        $statement->bindParam('rel_id', $rel_id);
        $statement->bindParam('staffid', $staffid);
        $statement->bindParam('visible_to_costumer', $visible_to_customer);
        $statement->bindParam('attachment_key', $attachment_key);
        $statement->execute();        
        $tasks = $statement->fetchAll(\PDO::FETCH_ASSOC);
        if (!$this->getAutoInc()){
            return $this->getById($id);
        }
        else
        {
            foreach ($tasks as $row) {
                return $this->getById($row['ID']);
            }
        }
        return [];
    }

    public function getById($id){
        $file = new FileModel();        
        return $file;
    }

    public function getByRelation( $rel_type, $rel_id ) {
 
        $cSQL = "SELECT * FROM TBLFILES
        WHERE REL_TYPE = :rel_type AND REL_ID = :rel_id ";
        $statement = $this->pdo
            ->prepare( $cSQL );  
        $statement->bindParam('rel_type', $rel_type);
        $statement->bindParam('rel_id', $rel_id);
        $statement->execute();        
        $files = $statement->fetchAll(\PDO::FETCH_ASSOC);
        return $files;
    }

    // remover arquivo pela chave
    public function deleteByKey( $attachment_key ){
        $file = $this->getByKey($attachment_key);
        if (isset($file)){
            $rel_id = $file['rel_id'];
            $rel_type = $file['rel_type'];
            $to_old_rel_type = 'del_' . $rel_type;
            $cSQL = "UPDATE TBLFILES SET 
                REL_TYPE = :to_old_rel_type
                    WHERE ATTACHMENT_KEY = :attachment_key ";
            $statement = $this->pdo
                ->prepare( $cSQL );
            $statement->bindParam('to_old_rel_type',$to_old_rel_type);
            $statement->bindParam('attachment_key', $attachment_key);
            $statement->execute();
            return true;
        }
        return false;    
    }

    // Get file by key
    public function getByKey( $attachment_key ){
        $cSQL = "SELECT * FROM TBLFILES
       WHERE ATTACHMENT_KEY = :attachment_key ";
        $statement = $this->pdo
            ->prepare( $cSQL );  
 
        $statement->bindParam('attachment_key', $attachment_key);
        $statement->execute();        
        $file = $statement->fetchAll(\PDO::FETCH_ASSOC);
        $filelower = [];
        foreach ($file as $row) {
            $filelower[] = array_change_key_case($row, CASE_LOWER);
        }
        return $filelower;
    }
   
    // Desvincular o anexo do documento pela chave do mesmo
    public function detachByKey( $attachment_key ){
        $file = $this->getByKey($attachment_key)[0];
        if (isset($file)){
            $rel_id = $file['rel_id'];
            $rel_type = $file['rel_type'];
            if (strpos( $file['rel_type'], 'det_', 1 )>0){
               return true;
            }
            if (strpos( $file['rel_type'], 'del_', 1 )>0 ){
                return true;
            }
            $to_old_rel_type = 'detached_' . $rel_type;
            $cSQL = "UPDATE TBLFILES SET 
                REL_TYPE = :to_old_rel_type
                    WHERE ATTACHMENT_KEY = :attachment_key ";
            $statement = $this->pdo
                ->prepare( $cSQL );
            $statement->bindParam('to_old_rel_type',$to_old_rel_type);
            $statement->bindParam('attachment_key', $attachment_key);
            $statement->execute();
            return true;
        }
        return false;
    }

}