<?php

namespace App\DAO\Firebird\EI;

abstract class Conexao
{
    /**
    @var \PDO
    */
    protected $pdo;
    
    public function __construct(){
     
          //?????
          $host = getenv('GOOGLE_SERVER');
          $port = getenv('GOOGLE_PORT');
          $user = getenv('GOOGLE_USERNAME');
          $pass = getenv('GOOGLE_PASSWORD');
          $dbas = getenv('GOOGLE_DATABASE');
         
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

}