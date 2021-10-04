<?php

namespace App\Constants;


class Constants {

    const SHOW_DEBUG_BACKTRACE = TRUE;
    const FILE_READ_MODE = 0644;
    const FILE_WRITE_MODE = 0666;
    const DIR_READ_MODE = 0755;
    const DIR_WRITE_MODE = 0755;
    const FOPEN_READ = 'rb';
    const FOPEN_READ_WRITE = 'r+b';
    const FOPEN_WRITE_CREATE_DESTRUCTIVE = 'wb'; // truncates existing file data, use with care
    const FOPEN_READ_WRITE_CREATE_DESTRUCTIVE = 'w+b'; // truncates existing file data, use with care
    const FOPEN_WRITE_CREATE = 'ab';
    const FOPEN_READ_WRITE_CREATE = 'a+b';
    const FOPEN_WRITE_CREATE_STRICT = 'xb';
    const FOPEN_READ_WRITE_CREATE_STRICT = 'x+b';

    /*
    |--------------------------------------------------------------------------
    | Exit Status Codes
    |--------------------------------------------------------------------------*/
    const EXIT_SUCCESS = 0; // no errors
    const EXIT_ERROR = 1; // generic error
    const EXIT_CONFIG = 3; // configuration error
    const EXIT_UNKNOWN_FILE = 4; // file not found
    const EXIT_UNKNOWN_CLASS = 5; // unknown class
    const EXIT_UNKNOWN_METHOD = 6; // unknown class member
    const EXIT_USER_INPUT = 7; // invalid user input
    const EXIT_DATABASE = 8; // database error
    const EXIT__AUTO_MIN = 9; // lowest automatically-assigned error code
    const EXIT__AUTO_MAX = 125; // highest automatically-assigned error code

  
    const TEMP_FOLDER = 'temp' . '/';
    const BACKUPS_FOLDER = 'backups'.'/';
    const INBOX_FOLDER = 'inbox'.'/';
    const CLIENT_ATTACHMENTS_FOLDER = 'clients'.'/';
    const TICKET_ATTACHMENTS_FOLDER = 'ticket_attachments' . '/';
    const COMPANY_FILES_FOLDER = 'company' . '/';
    const STAFF_PROFILE_IMAGES_FOLDER = 'staff_profile_images' . '/';
    const CONTACT_PROFILE_IMAGES_FOLDER = 'client_profile_images' . '/';
    const NEWSFEED_FOLDER = 'newsfeed' . '/';
    const CONTRACTS_UPLOADS_FOLDER = 'contracts' . '/';
    const TASKS_ATTACHMENTS_FOLDER = 'tasks' . '/';
    const INVOICE_ATTACHMENTS_FOLDER = 'invoices' . '/';
    const ESTIMATE_ATTACHMENTS_FOLDER = 'estimates' . '/';
    const PROPOSAL_ATTACHMENTS_FOLDER = 'proposals' . '/';
    const EXPENSE_ATTACHMENTS_FOLDER = 'expenses' . '/';
    const LEAD_ATTACHMENTS_FOLDER = 'leads' . '/';
    const PROJECT_ATTACHMENTS_FOLDER = 'projects' . '/';
    const PROJECT_DISCUSSION_ATTACHMENT_FOLDER = 'discussions' . '/';
    const CREDIT_NOTES_ATTACHMENTS_FOLDER = 'credit_notes' . '/';
    const ACTIVITY_ATTACHMENTS_FOLDER = 'activities' . '/';
    const CASHFLOW_ATTACHMENTS_FOLDER = 'cashflow' . '/';
    const KNOWLEDGE_BASE_ATTACHMENTS_FOLDER = 'knowledge_base' . '/';
    const STAFF_ATTACHMENTS_FOLDER = 'staff_profile' . '/';
    const MESSAGE_FOLDER = 'messaging' . '/';

}