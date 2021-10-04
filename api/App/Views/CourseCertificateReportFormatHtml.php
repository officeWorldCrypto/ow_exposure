<?php

namespace App\Views;

use App\Models\Firebird\EI\ActivityModel;
use App\Models\Firebird\EI\ActivityMemberModel;
use App\Models\Firebird\EI\LeadModel;
use App\Controllers\StaffController;
use App\Controllers\ExpenseController;
use App\Library\StrUtils;
use App\Controllers\ActivityController;
use App\Library\DateTimeUtils;
use App\Library\LanguageUtils;

class CourseCertificateReportFormatHtml
{

    private $activity;
    private $lead;
    private $tasks;
    private $expenses;
    private $expenses_total;
    private $members;
    private $files;
    private $client_data;
    private $clients;
    private $attachments_resume;
    private $workspace;
    private $url_base;

    public function __construct($data)
    {
        $this->activity = $data['activity'];
        $this->lead = $data['lead'];
        $this->url_base = 'https://cosems.com/rs/integrador/uploads/';
    }

    public function report()
    {
        return $this->_render();
    }

    function _render()
    {

        $_html = '';
        $_html = 
        $this->_setup() .
             $this->_header() .
             $this->_subtitle() .
             $this->_description() .
             $this->_summary() 
            // //. $this->_dump()
            ;
        return $_html;
    }


    function _setup(){

        return '
            <head>
            <meta http-equiv="Content-Type" content="charset=utf-8" />
            <style type="text/css">
                @page {
                    margin: 10;
                }
                * { padding: 0; margin: 10; }
                @font-face {
                    font-family: "source_sans_proregular";
                    src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
                    font-weight: normal;
                    font-style: normal;

                }
                body{
                    font-family: "source_sans_proregular", Arial,Calibri,Candara,Segoe,Segoe UI,Optima,sans-serif;
                }
                h1{
                    font-size: 48px;
                    font-align: center;
                    font-weight: normal;
                    font-style: italic;
                    text-align: center;
                }
                .text {
                    font-size: 28px;
                    text-align: center;
                    font-style: italic;
                    font-weight: normal;
                }
                .resume {
                    padding-left: 48px;
                    padding-right: 48px;
                }
                .date {
                    font-size: 18px;
                    text-align: right;
                }
            </style>
        </head>
        ';


    }

    function _header()
    {
        $_upload_url = getenv('EI_UPLOAD_URL');
        $_header = getenv('REPORT_HEADER');
        $logo = $_upload_url . '/logo.png';
        return "
        
        <head>
        <style>
          table {
            width: 100%;
            border: 1px solid #000;
          }          
          th.from, th.date {
            width: 15%
          }
          th.subject {
            width: 70%; /* Not necessary, since only 70% width remains */
          }
          image {
              width: 100px;
          }
        </style>
        </head>
        <body>
        <img style='width: 100%; height: auto;' src='" . $logo . "'>
            <br>
            
            <h5 style='text-align: center'>" . $_header . "</h5>
            
            ";
    }

    function _members()
    {

        $_competence = substr($this->activity['competence'], 4, 2) . '/' . substr($this->activity['competence'], 0, 4);
        $_html =  "
        <table>
        <tr>
        <td>Nome do apoiador</td><td>Mês</td>
        </tr>
        <tr style='color:#4a4a4a;'>
        <td>";
        foreach ($this->members as $member) {
            $_html .= $member['firstname'] . ' ' . $member['lastname'] . '<br>';
        }
        $_html .= "
        </td>
        <td>" . $_competence . "</td>
        </tr>
        </table>
        ";

        return $_html;
    }


    function _summary()
    {

        $_html = "<div class='resume'>
        <p class='date'>Porto Alegre, 22 de outubro de 2021</p>
        <br>
        <br>
        <br>_____________________________________________<br>
        MAICON DE BARROS LEMOS<br>Presidente do COSEMS/RS
        </div>";

        return $_html;
    }

    function _description()
    {

        //'Plano de trabalho'
        $_lang_activity_work_plan = LanguageUtils::l('activity_work_plan');

        $_html =  "   
        <br>
        <div class='text'><p>Pelo presente instrumento, certificamos que " . $this->lead->getName() . ", participou do SEMINÁRIO ABCD nos dias 01, 02 e 03 de outubro de 2021.
        </div>
        ";
        return $_html;
    }

    function _clients()
    {

        $_lang_activity_customer = ucwords(LanguageUtils::l('activity_customer'));
        $_lang_client_vat_number = LanguageUtils::l('client_vat_number');

        $_html = "<p>" . $_lang_activity_customer . "</b><br>" . trim($this->client_data['company']) . "<br>
        " . $this->client_data['address'] . "<br>
        " . $this->client_data['city'] . "," . $this->client_data['state'] . "," . $this->client_data['zip'] . "
        <br>
        " . $this->client_data['phonenumber'] . "
        <br>
        " . $_lang_client_vat_number . ": " . $this->client_data['vat'] . "
        <br>
        <hr>
    <p>

      ";

        $_lang_activity_others = LanguageUtils::l('activity_others');

        if (isset($this->clients)) {
            if (count($this->clients) > 0)
                $_html .=  "<br><br>" . $_lang_activity_others . "";
            foreach ($this->clients as $rowCli) {
                //var_dump($rowCli);
                $_html .=  "
                <ul><li>
                " . $rowCli['company'] . "
                </li></ul>
                ";
            }
        }


        return $_html;
    }

    function _subtitle(){
        $_html =  "       
<h1>Certificado</h1>";
        return $_html;
    }


    function _dump()
    {
        print_r($this->activity);
        print_r($this->clients);
        print_r($this->members);
        print_r($this->expenses);
        print_r($this->tasks);
        print_r($this->client_data);
        print_r($this->files);
        return '';
    }
}
