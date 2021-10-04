<?php

namespace App\Views;

use App\Models\Firebird\EI\ActivityModel;
use App\Models\Firebird\EI\ActivityMemberModel;
use App\Controllers\StaffController;
use App\Controllers\ExpenseController;
use App\Library\StrUtils;
use App\Controllers\ActivityController;
use App\Views\ActivityReportFormatHTML;

class ActivityReportFormatPDF {

    private $activity;
    private $expenses;   
    private $members;
    private $files;
    private $clients;
    private $attachments_resume;

    function __construct($data)
    {
        $this->activity = $data['activity'];
        $this->expenses = $data['expenses'];
        $this->members = $data['members'];
        $this->files = $data['files'];
        $this->clients = $data['clients'];
        $this->attachments_resume = $data['attachments_resume'];
    }

    public function report(){
        return $this->_render();
    }

    function _render(){
        $data = [];
        $data['activity'] = $this->activity;
        $data['expenses'] = $this->expenses;
        $data['members'] = $this->members;
        $data['files'] = $this->files;
        $data['clients'] = $this->clients;
        $data['attachments_resume'] = $this->attachments_resume;
        $activityReportFormatHTML = new ActivityReportFormatHTML($data);
        return $activityReportFormatHTML->report();
    }
}
