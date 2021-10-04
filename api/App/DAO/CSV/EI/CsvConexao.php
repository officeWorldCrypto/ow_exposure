<?php

namespace App\DAO\CSV\SaudeRede;
use League\Csv\Reader;
use League\Csv\Statement;

abstract class CsvConexao
{
    private $fileCSV;
    private $csv;
    protected $path;
    
    public function __construct(){     
        $this->path = getenv('SAUDE_REDE_UPLOAD');
    } 

    public function setFileCSV( String $fileCSV )
    {
        $this->fileCSV = $fileCSV;
        return $this;

    }

    public function getFileCSV(){
        return $this->fileCSV;
    }

    public function load(){
        $importFile = $this->path.'/'.$this->fileCSV;        
        $this->csv = Reader::createFromPath( $importFile, 'r');
        $this->csv->setHeaderOffset(0);
        $header = $this->csv->getHeader();
        $records = $this->csv->getRecords();
    }

    public function content(){       
        $this->load();       
        return $this->csv->getContent(); 
    }

    public function getCSV(){
       $this->load(); 
       return $this->csv;
    }

    public function getArray(){
        $data = [];
        $this->load();        
        //build a statement
        $stmt = (new Statement());
        //->offset(10)
        //->limit(25);
        $records = $stmt->process($this->csv);
        foreach ($records as $record) {
           //do something here
           $data[] = $record;
        }
        return $data;
    }
 
}