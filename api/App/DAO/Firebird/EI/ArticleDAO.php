<?php

namespace App\DAO\Firebird\EI;

use App\Models\Firebird\EI\ArticleModel;

class ArticleDAO extends Conexao
{
    public function __construct(){       
        parent::__construct();
    }

    // Get 1
    public function getById(int $id) {
        $statement = $this->pdo
            ->prepare('SELECT * FROM TBLKNOWLEDGEBASE
               WHERE ARTICLEID = :id');
        $statement->bindParam('id', $id);
        $statement->execute();
        $articles = $statement->fetchAll(\PDO::FETCH_ASSOC);
        if (count($articles) === 0)
           return null;       
        return $articles;
    }

    // Get *
    public function getAll() {
        $statement = $this->pdo
            ->prepare('SELECT * FROM TBLKNOWLEDGEBASE
               ');
        $statement->execute();
        $articles = $statement->fetchAll(\PDO::FETCH_ASSOC);
        if (count($articles) === 0)
           return null;
        return $articles;
    }

    // Get Fields widhout description content
    public function getAllHeaders() {
        $statement = $this->pdo
            ->prepare('SELECT 
                ARTICLEID,
                ARTICLEGROUP,
                SUBJECT,
                SLUG,
                ACTIVE,
                DATECREATED,
                HOURCREATED,
                ARTICLE_ORDER,
                STAFF_ARTICLE
            FROM TBLKNOWLEDGEBASE
            ');
        $statement->execute();
        $articles = $statement->fetchAll(\PDO::FETCH_ASSOC);
        if (count($articles) === 0)
            return null;
        return $articles;
    }

   public function insert( $data ){
        $id = $this->get_next_id('TBLKNOWLEDGEBASE','ARTICLEID');
        $subject = $data['subject'];
        $active = $data['active'];
        $date = '01-01-01';
        $hour = '00:00:00';
        $statement = $this->pdo
            ->prepare('INSERT INTO TBLKNOWLEDGEBASE (
                 ARTICLEID,
                  SUBJECT,
                   ARTICLEGROUP,
                    DATECREATED,
                    HOURCREATED, 
                    ACTIVE ) ' .
            ' VALUES  ( :id, :subject, 0, :date, :hour, :active ) ' );
        $statement->bindParam('id',$id);
        $statement->bindParam('subject',$subject);
        $statement->bindParam('date',$date);
        $statement->bindParam('hour',$hour);
        $statement->bindParam('active',$active);
        $statement->execute();
        $articles = $this->getById($id);
        return $articles;
    }

    public function update( $data ){
        $id = $data['id'];
        $subject = $data['subject'];
        $description = $data['description'];
        $statement = $this->pdo
            ->prepare('UPDATE TBLKNOWLEDGEBASE 
              SET 
              SUBJECT = :subject,
              DESCRIPTION = :description
              WHERE 
             ARTICLEID = :id
             ' );
        $statement->bindParam('id',$id);
        $statement->bindParam('subject',$subject);
        $statement->bindParam('description',$description);
        $statement->execute();
        $articles = $this->getById($id);
        return $articles;
    }

    public function patch_subject( $data ){
        $id = $data['id'];
        $subject = $data['subject'];
        $statement = $this->pdo
            ->prepare('UPDATE TBLKNOWLEDGEBASE 
              SET 
              SUBJECT = :subject,
              WHERE 
             ARTICLEID = :id
             ' );
        $statement->bindParam('id',$id);
        $statement->bindParam('subject',$subject);
        $statement->execute();
        $articles = $this->getById($id);
        return $articles;
    }


    public function patch_description( $data ){
        $id = $data['id'];
        $description = $data['description'];
        $statement = $this->pdo
            ->prepare('UPDATE TBLKNOWLEDGEBASE 
              SET 
              DESCRIPTION = :description,
              WHERE 
             ARTICLEID = :id
             ' );
        $statement->bindParam('id',$id);
        $statement->bindParam('description',$description);
        $statement->execute();
        $articles = $this->getById($id);
        return $articles;
    }


    public function delete( $data ){
        $statement = $this->pdo
            ->prepare('DELETE FROM TBLKNOWLEDGEBASE               
              WHERE 
             ARTICLEID = :id
             ' );
        $statement->execute( $data );
        return true;
    }

    public function getnextid(){
        $statement = $this->pdo
            ->prepare('SELECT MAX(ARTICLEID)+1 FROM TBLKNOWLEDGEBASE' );
        $statement->execute();
        $articles = $statement->fetchAll(\PDO::FETCH_ASSOC);
           foreach($articles as $row){
              return $row['ARTICLEID'];
           }
        return 1;
    }

}
