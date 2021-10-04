<?php

namespace App\DAO\Firebird\EI;

abstract class Conexao
{
    /**
    @var \PDO
    */
    protected $pdo;
    
    public function __construct(){
     
          $host = getenv('EI_SERVER');
          $port = getenv('EI_PORT');
          $user = getenv('EI_USERNAME');
          $pass = getenv('EI_PASSWORD');
          $dbas = getenv('EI_DATABASE');
         
          /*$host = 'localhost';
          $dbas = '/home/valmor/dados/cosems/base_cosems.gdb';
          $user = 'SYSDBA';
          $pass = 'masterkey';*/
          
          $dsn = "firebird:dbname={$host}:{$dbas};port={$port};charset=utf-8;dialect=1";

          $this->pdo = new \PDO($dsn, $user, $pass);
          $this->pdo->setAttribute(
              \PDO::ATTR_ERRMODE,
              \PDO::ERRMODE_EXCEPTION
          );
    } 

    public function get_next_id($table, $id){
        $sql = 'SELECT MAX( ' . $id . ' )+1 AS ' . $id . ' FROM ' . $table;
        
        $statement = $this->pdo
            ->prepare($sql);
        $statement->execute();
        $query = $statement->fetchAll(\PDO::FETCH_ASSOC);
        foreach($query as $row){
            //echo $row[$id] . '-' . $sql;die;
            return $row[$id];
        }
        return 1;
    }

}