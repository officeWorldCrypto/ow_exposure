<?php

namespace App\DAO\PDF\EI;
use iio\libmergepdf\Merger;
use iio\libmergepdf\Driver;
use iio\libmergepdf\Pages;
use iio\libmergepdf;

abstract class PDFConexao
{
    private $filePDF;
    private $listFilesPDF = [];
    private $csv;
    protected $path;
    
    public function __construct(){     
        $this->path = getenv('EI_UPLOAD');
    } 

    public function load(){
        $importFile = $this->path.'/'.$this->fileCSV;        
        $this->csv = Reader::createFromPath( $importFile, 'r');
        $this->csv->setHeaderOffset(0);
        $header = $this->csv->getHeader();
        $records = $this->csv->getRecords();
    }

    public function merge(){
       $merger = new Merger();
       $processList = [];
       foreach($this->listFilesPDF as $row){
           if ( strpos( $row, '.pdf' ) > 0 ) 
           {
              $merger->addFile($row);
              $processList[]=$row;
           }
            //$merger->addFile('bar.pdf', new Pages('1-10'));
            
       }
       $cFileDest = $this->filePDF;           
       
       $createdPdf = $merger->merge();
       file_put_contents($cFileDest, $createdPdf);

       //var_dump( $createdPdf );
       return ["message" => 'Files merged to file',
         "file" => $cFileDest,
         "merged" => "",
         "process_list" => $processList];
    }
    
    public function addFile( $cFilePdf ){
        $this->listFilesPDF[]= $cFilePdf;
    }
    

    /**
     * Get the value of filePDF
     */ 
    public function getFilePDF()
    {
        return $this->filePDF;
    }

    /**
     * Set the value of filePDF
     *
     * @return  self
     */ 
    public function setFilePDF($filePDF)
    {
        $this->filePDF = $filePDF;

        return $this;
    }
}