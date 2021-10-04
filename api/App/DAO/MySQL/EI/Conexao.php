<?php

namespace App\DAO\MySql\SaudeRede;

abstract class Conexao
{
    /**
    @var \PDO
    */
    protected $pdo;
    
    public function __construct(){
     
          $host = getenv('SAUDE_REDE_SERVER');
          $port = getenv('SAUDE_REDE_PORT');
          $user = getenv('SAUDE_REDE_USERNAME');
          $pass = getenv('SAUDE_REDE_PASSWORD');
          $dbas = getenv('SAUDE_REDE_DATABASE');
          
          $dsn = "mysql:host={$host};dbname={$dbas};port={$port}";
          $this->pdo = new \PDO($dsn, $user, $pass);
          $this->pdo->setAttribute(
              \PDO::ATTR_ERRMODE,
              \PDO::ERRMODE_EXCEPTION
          );
    } 

}