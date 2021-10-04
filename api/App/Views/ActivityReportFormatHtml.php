<?php

namespace App\Views;

use App\Models\Firebird\EI\ActivityModel;
use App\Models\Firebird\EI\ActivityMemberModel;
use App\Controllers\StaffController;
use App\Controllers\ExpenseController;
use App\Library\StrUtils;
use App\Controllers\ActivityController;
use App\Library\DateTimeUtils;
use App\Library\LanguageUtils;

class ActivityReportFormatHtml
{

    private $activity;
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
        $this->expenses = $data['expenses'];
        $this->expenses_total = $data['expenses_total'];
        $this->members = $data['members'];
        $this->files = $data['files'];
        $this->clients = $data['clients'];
        $this->tasks = $data['tasks'];
        $this->client_data = $data['client_data'];
        $this->attachments_resume = $data['attachments_resume'];
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
             $this->_members() .
             $this->_clients() .
             //$this->_tasks() .
             $this->_tasks_summary() .
             $this->_description() .
             $this->_files() .
             $this->_filesPdf() .
             $this->_expenses() .
             $this->_expenses_summary() .
             $this->_summary() ;
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
            <br>
            <h5 style='text-align: center'>" . $_header . "</h5>
            <hr>
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


    function _subtitle()
    {

        $_html = "
        <br>
        <br>
        <table>
        <tr><td>Estado/Região de atuação</td>
        <td>Período</td>
        </tr>
        <tr style='color:#4a4a4a;'>
        <td>" . $this->activity['macroregion'] . "
        <br>
        " . $this->activity['region'] . " " . $this->activity['region_name'] . "
        RS</td>
        </tr>
        </table>";

        return $_html;
    }


    function _expenses_summary(){
        $_lang_total_expenses = LanguageUtils::l('activity_overview_expenses');
        $_html = "
        <table>
            <tr>
            <td>".$_lang_total_expenses."</td>
            <td><p style='text-align:right;'>". $this->expenses_total ."</p></td>
            </tr>
        </table>";
        return $_html;
    }


    function _tasks_summary()
    {

        // Table headers translated
        $_lang_activity_start_date = LanguageUtils::l('activity_start_date');
        $_lang_estimated_hours = LanguageUtils::l('estimated_hours');
        $_lang_task_status = LanguageUtils::l('task_status');
        $_start_date = DateTimeUtils::d($this->activity['start_date']);
        $d = $this->activity['estimated_hours'] ? str_replace('.', ':', $this->activity['estimated_hours']) : $this->activity['estimated_hours'];
        $_status_name = ""; //$status['name'];
        $_html = "
        <table>
            <tr>
            <td>
            <b> " . $_lang_activity_start_date . ": </b>" . $_start_date . "<br>
            <b> " . $_lang_estimated_hours . ": </b>" . $d . "<br>
            <b> " . $_lang_task_status . ": </b>" . $_status_name . "<br>
            <b> Identificação: </b>" . $this->activity['id'] . "<br>
            </td>
            </tr>
            <tr>
            <td></td>
            </tr>
        </table>
        <hr>
        <p>";


        return $_html;
    }


    function _description()
    {

        //'Plano de trabalho'
        $_lang_activity_work_plan = LanguageUtils::l('activity_work_plan');

        $_html =  "   
        <br>
            <hr>
            <p>" . $_lang_activity_work_plan . "</p>
            <h2>" . $this->activity['name'] . "</h2>
            <div style='font-size:12px'>" . $this->activity['description'] . "</div>

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

    // Expenses
    function _expenses()
    {

        $_lang_expense_name = LanguageUtils::l('expense_name');
        $_lang_expense_note = LanguageUtils::l('expense_note');
        $_lang_expense_amount = LanguageUtils::l('expense_amount');
        $_lang_expense_date = LanguageUtils::l('expense_date');
        $_lang_activity_expenses = LanguageUtils::l('activity_expenses');

        $_html = "       
            <p><b style='background-color:#f0f0f0;'>
            " . ucwords($_lang_activity_expenses) . "</b></p>
            <table width='100%' bgcolor='#fff' cellspacing='0' 
               cellpadding='5' border='1'>
            <thead>
            <tr bgcolor='#323a45' style='color:#ffffff;'>
            <th class='image'><b>" . $_lang_expense_name . "</b></th>
            <th width='30%'><b>" . $_lang_expense_note . "</b></th>
            <th width='10%'><b>" . $_lang_expense_amount . "</b></th>            
            </tr>
            </thead>
            <tbody>";

        if (isset($this->expenses)) {
            foreach ($this->expenses as $expense) {
                //$_url = $this->url_base . 'expenses/' . $expense['id'] . '/');
                $file = '';
                // file_name
                if (!isset($expense['attachments'])){
                    $file = '';
                }
                else
                {
                    if ($expense['attachments']!=null){
                        if (is_array($expense['attachments'])){
                            if (count($expense['attachments'])>0){
                                foreach( $expense['attachments'] as $file ){
                                    $file = $file['file_name'];
                                }
                            }
                            else 
                            {
                                $file = $expense['attachments'];
                            }
                        }
                        else
                        {
                            $file = $expense['attachments'];
                        }                        
                    }
                }
                $_html .= "<tr style='color:#4a4a4a;'>";
                if (isset($file)) {
                    $extension = strtolower(strrchr($file, "."));
                    if (($extension == '.jpg') ||
                        ($extension == '.jpeg') ||
                        ($extension == '.png')
                    ) {
                        $_url = $this->url_base . 'expenses/' . $expense['id'] . '/' . $file;
                        $_html .= "<td>
                                <img class='image' style='width:300px;' src='" . $_url . "' /></td>";
                    } else {
                        $_html .= "<td width='50%'>" . $file . "</td>";
                    }
                } else {
                    $_html .= "<td width='50%'>" . $file . "</td>";
                }
                $_html .= "<td width='20%'>".
                 "<p>" . $_lang_expense_date . ':' . DateTimeUtils::d($expense['date']) . "</p>" . 
                "<p style='font-size:9px'>".utf8_decode($expense['note']) . "</p></td>" .
                "<td width='10%'><p style='font-size:12px; text-align:right;'>" . $expense['amount'] . "</p></td>" ;
                $_html .= "</tr>";
            }
        }
        $_html .= '</tbody>' .
        '</table>';
        
        return $_html;
    }

    function activity_file_url($file)
    {          
        $fileOut = '';  
        if ($file['filetype'] == 'application/pdf') {
            if ($this->workspace != '') {
                $upload_path = getenv('EI_UPLOAD') . $this->workspace . '/activities/' . $this->activity['id'];
            } else {
                $upload_path = getenv('EI_UPLOAD') . '/activities/' . $this->activity['id'];
            }
            $fileIn =  $upload_path . '/' . $file['file_name'];
            $fileOut = $this->_generate_file_image( $fileIn, $upload_path . '/' );
            //$file['file_name'];
            return $fileOut; 
        }
        return $fileOut;
    }

    function _generate_file_image( $fileIn, $folderOut ){
        $result = '';
        $command = 'pdftocairo -png "' . $fileIn . '" ' . $folderOut . '000';
        exec( "echo '" . $command . "' >/tmp/ei_command_log.txt" );
        exec( $command, $result );
        $image1 = $folderOut . '000-1.png';
        $filePng = $fileIn . '.png';
        exec( 'mv "' . $image1 . '" "' . $filePng . '"');
        return $filePng;
    }

    function _files()
    {
        if ($this->workspace != '') {
            $_upload_url = getenv('EI_UPLOAD_URL') . $this->workspace . '/activities/' . $this->activity['id'] . '/';
        } else {
            $_upload_url = getenv('EI_UPLOAD_URL') . '/activities/' . $this->activity['id'] . '/';
        }
        $_upload_url = trim($_upload_url);
        $_lang_file_name = LanguageUtils::l('file_name');
        $_lang_file_id = LanguageUtils::l('file_id');
        $_lang_file_extras = LanguageUtils::l('file_extras');
        $_lang_activity_files = LanguageUtils::l('activity_files');
        // Files - Arquivos
        $_html = "            
            <p>
            <b style='background-color:#f0f0f0;'>
               " . ucwords($_lang_activity_files) . "</b></p>
            <table width='100%' bgcolor='#fff' 
            cellspacing='0' cellpadding='5' border='1'>
            <thead>
            <tr bgcolor='#323a45' style='color:#ffffff;'>
            <th width='50.12%'><b>" . $_lang_file_name . "</b></th>
            <th width='20%'><b>Data/" . $_lang_file_id . "</b></th>
            <th><b>" . $_lang_file_extras . "</b></th>
            </tr>
            </thead>
            <tbody>";

        foreach ($this->files as $file) {
            $_html .= "
                <tr style='color:#4a4a4a;'>
                ";
            if (substr($file['filetype'], 0, 5) == 'image') {
                $_html .=
                    "<td width='50.12%'><img 
                    class='image' style='width:400px;' 
                    src='" . $_upload_url . rawurlencode($file['file_name']) . "'/> ";
            } else if ($file['filetype'] == 'application/octet-stream') {
                $file_path = $_upload_url . '/' . rawurlencode($file['file_name']);
                if ($file_path != '') {
                    $_html .= "
                        <td width='50.12%' class='image' style='width:400px;'>
                            <img src='" . $file_path . "' />
                        </td>";
                } 
            } else if ($file['filetype'] == 'image/jpg') {
                $_html .= "
                    <td width='50.12%' class='image' style='width:400px;'>
                        <img src='" . $this->activity_file_url($file, true) . "' />
                    </td>";
            } else if ($file['filetype'] == 'image/jpeg') {
                $_html .= "
                    <td width='50.12%' class='image' style='width:400px;'>
                        <img src='" . $this->activity_file_url($file, true) . "' />
                    </td>";
            } else if ($file['filetype'] == 'image/png') {
                $_html .= "
                    <td width='50.12%' class='image' style='width:400px;'>
                        <img src='" . $this->activity_file_url($file, true) . "' />
                    </td>";
            } else if ($file['filetype'] == 'application/pdf') {
                $_html .= "<td width='50.12%' class='image' style='width:400px;'>
                        <p>Anexo: ". $file['file_name'] . "' </p>
                    </td>";
            } else {
                # code...
                $_html .= "<td width='50.12%'>" . $file['filetype'] . "</td>";
            }
            // OTHER fields
            $_html .= "<td width='20%'>" . $file['subject'] . "<br /></td>
                  <td>" . $file['description'] . "</td>
            </tr>";
            
        }
        $_html .= "</tbody>
             </table>";
        return $_html;
    }

    function _filesPdf(){
        if ($this->workspace != '') {
            $_upload_url = getenv('EI_UPLOAD_URL') . $this->workspace . '/activities/' . $this->activity['id'] . '/';
        } else {
            $_upload_url = getenv('EI_UPLOAD_URL') . '/activities/' . $this->activity['id'] . '/';
        }
        $_upload_url = trim($_upload_url);
        $_lang_activity_files = LanguageUtils::l('activity_files');
        // Files - Arquivos
        $_html = "<p>" . ucwords($_lang_activity_files) . "</p>";
        foreach ($this->files as $file) {
            $_html .= "<p>";
            if ($file['filetype'] == 'application/pdf') {
                $fileConverted = $this->activity_file_url($file, true);
                if ($fileConverted != ''){
                    $fileConverted = 
                        $_upload_url . 
                        $file['file_name'] . '.png';
                }
                $_html .= "<img class='image' style='width:600px' src='" . $fileConverted . "'>";
            } else {
            }
            // OTHER fields
            $_html .= "<p>" . $file['subject'] . "</p><p>" . $file['description'] . "</p>";           
        }
        $_html .= "</div>";
        return $_html;
    }

    function _tasks()
    {
        $_lang_detailed_overview = LanguageUtils::l('detailed_overview');
        $_lang_tasks_dt_name = LanguageUtils::l('tasks_dt_name');
        $_lang_total_task_members_assigned = LanguageUtils::l('total_task_members_assigned');
        $_lang_task_id = LanguageUtils::l('task_id');
        $_lang_task_single_start_date = LanguageUtils::l('task_single_start_date');
        $_lang_task_single_due_date = LanguageUtils::l('task_single_due_date');
        $_lang_task_status = LanguageUtils::l('task_status');
        $_lang_time_h = LanguageUtils::l('time_h');
        $_lang_time_decimal = LanguageUtils::l('time_decimal');

        $_html = "";
        $task_regs = 0;
        if (isset($this->tasks)) {

            foreach ($this->tasks as $task) {
                $task_regs = $task_regs + 1;
            }
        }
        if ($task_regs > 0) {
            $_html = "
            
            <p><b style='background-color:#f0f0f0;'>
            " . ucwords($_lang_detailed_overview) . "</b></p>
            <table 
            width='100%' bgcolor='#fff' 
            cellspacing='0' cellpadding='5' border='1'>
            <thead>
                <tr bgcolor='#323a45' style='color:#ffffff;'>
                    <th width='26.12%'><b>" . $_lang_tasks_dt_name . "</b></th>
                    <th width='12%'><b>" . $_lang_total_task_members_assigned . "</b></th>
                    <th width='10%'><b>" . $_lang_task_id . "</b></th>
                    <th width='12%'><b>" . $_lang_task_single_start_date . "</b></th>
                    <th width='14%'><b>" . $_lang_task_single_due_date . "</b></th>
                    <th width='12%'><b>" . $_lang_task_status . "</b></th>
                    <th width='8%'><b>" . $_lang_time_h  . "</b></th>
                    <th width='8%'><b>" . $_lang_time_decimal . "</b></th>
                </tr>
            </thead>
            <tbody>
            ";

            foreach ($this->tasks as $task) {
                $_html .= "
                 <tr style='color:#4a4a4a;'>
                 <td width='26.12%'>" . $task['name'] . "</td>
                 <td width='12%'>1</td>
                 <td width='10%'>" . $task['id'] . "</td>
                 <td width='12%'>" . DateTimeUtils::d($task['startdate']) . "</td>
                 <td width='14%'>" . isset($task['duedate']) ? DateTimeUtils::d($task['duedate']) : '' . "</td>
                 <td width='12%'>" . $task['status'] . "</td>
                 <td width='8%'>" . $task['total_logged_time'] . "</td>
                 <td width='8%'>" . $task['total_logged_time'] . "</td>
                </tr>";
            }
            $_html .= "
            </tbody>
            </table>";
            return $_html;
        }
    }

    function _summary()
    {
        // Billed expenses + money
        $_html = "<table>
        </table>";
        return $_html;
    }


    /*

summary
       <tr>
       <td>
       <b>" . _l('activity_overview_expenses_billed') . 
       ": </b>" . format_money(
           sum_from_table('tblexpenses',array('where'=>array('project_id'=>$project->id,'invoiceid !='=>'NULL','billable'=>1),'field'=>'amount')),$project->currency_data->symbol) . "<br>
       </td>
       <td>
       <b>" . _l('activity_overview_expenses_unbilled') . ': </b>' . format_money(sum_from_table('tblexpenses',array('where'=>array('activityreport_id'=>$project->id,'INVOICEID IS NULL','BILLABLE'=>1),'field'=>'amount')),$project->currency_data->symbol) . '<br>';
       </td>
       </tr>


*/



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
