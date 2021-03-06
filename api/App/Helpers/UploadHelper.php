<?php 

namespace App\Helpers;

use App\Library\LanguageUtils;
use App\Library\Setup;
use App\Constants\Constants;

final class UploadHelper {

    /**
     * Handles uploads error with translation texts
     * @param  mixed $error type of error
     * @return mixed
     */
    function _internal_upload_error($error)
    {
        $phpFileUploadErrors = [
            0 => LanguageUtils::l('file_uploaded_success'),
            1 => LanguageUtils::l('file_exceeds_max_filesize'),
            2 => LanguageUtils::l('file_exceeds_maxfile_size_in_form'),
            3 => LanguageUtils::l('file_uploaded_partially'),
            4 => LanguageUtils::l('file_not_uploaded'),
            6 => LanguageUtils::l('file_missing_temporary_folder'),
            7 => LanguageUtils::l('file_failed_to_write_to_disk'),
            8 => LanguageUtils::l('file_php_extension_blocked'),
        ];

        if (isset($phpFileUploadErrors[$error]) && $error != 0) {
            return $phpFileUploadErrors[$error];
        }

        return false;
    }
    /**
     * Newsfeed post attachments
     * @param  mixed $postid Post ID to add attachments
     * @return array  - Result values
     */
    function handle_newsfeed_post_attachments($postid)
    {
        if (isset($_FILES['file']) && _internal_upload_error($_FILES['file']['error'])) {
            header('HTTP/1.0 400 Bad error');
            echo _internal_upload_error($_FILES['file']['error']);
            die;
        }
        $path = get_upload_path_by_type('newsfeed') . $postid . '/';
        $CI   = & get_instance();
        if (isset($_FILES['file']['name'])) {
            do_action('before_upload_newsfeed_attachment', $postid);
            $uploaded_files = false;
            // Get the temp file path
            $tmpFilePath = $_FILES['file']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                _maybe_create_upload_path($path);
                $filename = unique_filename($path, $_FILES['file']['name']);
                // In case client side validation is bypassed
                if (_upload_extension_allowed($filename)) {
                    $newFilePath = $path . $filename;
                    // Upload the file into the temp dir
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        $file_uploaded = true;
                        $attachment    = [];
                        $attachment[]  = [
                        'file_name' => $filename,
                        'filetype'  => $_FILES['file']['type'],
                        ];
                        $CI->misc_model->add_attachment_to_database($postid, 'newsfeed_post', $attachment);
                    }
                }
            }
            if ($file_uploaded == true) {
                echo json_encode([
                    'success' => true,
                    'postid'  => $postid,
                ]);
            } else {
                echo json_encode([
                    'success' => false,
                    'postid'  => $postid,
                ]);
            }
        }
    }

    /**
     * Handles upload for project files
     * @param  mixed $project_id project id
     * @return boolean
     */
    function handle_project_file_uploads($project_id)
    {
        $filesIDS = [];
        $errors   = [];

        if (isset($_FILES['file']['name'])
            && ($_FILES['file']['name'] != '' || is_array($_FILES['file']['name']) && count($_FILES['file']['name']) > 0)) {
            do_action('before_upload_project_attachment', $project_id);

            if (!is_array($_FILES['file']['name'])) {
                $_FILES['file']['name']     = [$_FILES['file']['name']];
                $_FILES['file']['type']     = [$_FILES['file']['type']];
                $_FILES['file']['tmp_name'] = [$_FILES['file']['tmp_name']];
                $_FILES['file']['error']    = [$_FILES['file']['error']];
                $_FILES['file']['size']     = [$_FILES['file']['size']];
            }

            $path = get_upload_path_by_type('project') . $project_id . '/';

            for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
                if (_internal_upload_error($_FILES['file']['error'][$i])) {
                    $errors[$_FILES['file']['name'][$i]] = _internal_upload_error($_FILES['file']['error'][$i]);

                    continue;
                }

                // Get the temp file path
                $tmpFilePath = $_FILES['file']['tmp_name'][$i];
                // Make sure we have a filepath
                if (!empty($tmpFilePath) && $tmpFilePath != '') {
                    _maybe_create_upload_path($path);
                    $filename = unique_filename($path, $_FILES['file']['name'][$i]);

                    // In case client side validation is bypassed
                    if (!_upload_extension_allowed($filename)) {
                        continue;
                    }

                    $newFilePath = $path . $filename;
                    // Upload the file into the company uploads dir
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        $CI = & get_instance();
                        if (is_client_logged_in()) {
                            $contact_id = get_contact_user_id();
                            $staffid    = 0;
                        } else {
                            $staffid    = get_staff_user_id();
                            $contact_id = 0;
                        }
                        $data = [
                                'project_id' => $project_id,
                                'file_name'  => $filename,
                                'filetype'   => $_FILES['file']['type'][$i],
                                'dateadded'  => date('Y-m-d H:i:s'),
                                'staffid'    => $staffid,
                                'contact_id' => $contact_id,
                                'subject'    => $filename,
                            ];
                        if (is_client_logged_in()) {
                            $data['visible_to_customer'] = 1;
                        } else {
                            $data['visible_to_customer'] = ($CI->input->post('visible_to_customer') == 'true' ? 1 : 0);
                        }
                        if ( $CI->db->dbdriver == 'ibase' ){ 
                            $data['id'] = get_next_id( 'TBLPROJECTFILES', 'ID' );						
                            $insert_id = $data['id'];
                            $data['dateadded'] = date('Y-m-d');
                            $data['timeadded'] = date('H:i:s');
                            $CI->db->insert('TBLPROJECTFILES', array_change_key_case( $data, CASE_UPPER ) );
                        } else { 
                            $CI->db->insert('tblprojectfiles', $data);					
                            $insert_id = $CI->db->insert_id();
                        
                        }
                        if ($insert_id) {
                            if (is_image($newFilePath)) {
                                create_img_thumb($path, $filename);
                            }
                            array_push($filesIDS, $insert_id);
                        } else {
                            unlink($newFilePath);

                            return false;
                        }
                    }
                }
            }
        }

        if (count($filesIDS) > 0) {
            $CI->load->model('projects_model');
            end($filesIDS);
            $lastFileID = key($filesIDS);
            $CI->projects_model->new_project_file_notification($filesIDS[$lastFileID], $project_id);
        }

        if (count($errors) > 0) {
            $message = '';
            foreach ($errors as $filename => $error_message) {
                $message .= $filename . ' - ' . $error_message . '<br />';
            }
            header('HTTP/1.0 400 Bad error');
            echo $message;
            die;
        }

        if (count($filesIDS) > 0) {
            return true;
        }

        return false;
    }

    /**
     * Handles upload for project files
     * @param  mixed $project_id project id
     * @return boolean
     */
    function handle_activity_file_uploads($project_id)
    {
        $filesIDS = [];
        $errors   = [];

        if (isset($_FILES['file']['name'])
            && ($_FILES['file']['name'] != '' || is_array($_FILES['file']['name']) && count($_FILES['file']['name']) > 0)) {
            do_action('before_upload_project_attachment', $project_id);

            if (!is_array($_FILES['file']['name'])) {
                $_FILES['file']['name']     = [$_FILES['file']['name']];
                $_FILES['file']['type']     = [$_FILES['file']['type']];
                $_FILES['file']['tmp_name'] = [$_FILES['file']['tmp_name']];
                $_FILES['file']['error']    = [$_FILES['file']['error']];
                $_FILES['file']['size']     = [$_FILES['file']['size']];
            }

            $path = get_upload_path_by_type('activity') . $project_id . '/';

            for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
                if (_internal_upload_error($_FILES['file']['error'][$i])) {
                    $errors[$_FILES['file']['name'][$i]] = _internal_upload_error($_FILES['file']['error'][$i]);

                    continue;
                }

                // Get the temp file path
                $tmpFilePath = $_FILES['file']['tmp_name'][$i];
                // Make sure we have a filepath
                if (!empty($tmpFilePath) && $tmpFilePath != '') {
                    _maybe_create_upload_path($path);
                    $filename = unique_filename($path, $_FILES['file']['name'][$i]);

                    // In case client side validation is bypassed
                    if (!_upload_extension_allowed($filename)) {
                        continue;
                    }

                    $newFilePath = $path . $filename;
                    // Upload the file into the company uploads dir
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        $CI = & get_instance();
                        if (is_client_logged_in()) {
                            $contact_id = get_contact_user_id();
                            $staffid    = 0;
                        } else {
                            $staffid    = get_staff_user_id();
                            $contact_id = 0;
                        }
                        $data = [
                                'activityreport_id' => $project_id,
                                'file_name'  => $filename,
                                'filetype'   => $_FILES['file']['type'][$i],
                                'dateadded'  => date('Y-m-d H:i:s'),
                                'staffid'    => $staffid,
                                'contact_id' => $contact_id,
                                'subject'    => $filename,
                            ];
                        if (is_client_logged_in()) {
                            $data['visible_to_customer'] = 1;
                        } else {
                            $data['visible_to_customer'] = ($CI->input->post('visible_to_customer') == 'true' ? 1 : 0);
                        }
                        if ( $CI->db->dbdriver == 'ibase' ){ 
                            $data['id'] = get_next_id( 'TBLACTIVITYREPORTFILES', 'ID' );						
                            $insert_id = $data['id'];
                            $data['dateadded'] = date('Y-m-d');
                            $data['timeadded'] = date('H:i:s');
                            $CI->db->insert('TBLACTIVITYREPORTFILES', array_change_key_case( $data, CASE_UPPER ) );
                        } else { 
                            $CI->db->insert('tblactivityreportfiles', $data);					
                            $insert_id = $CI->db->insert_id();
                        
                        }
                        if ($insert_id) {
                            if (is_image($newFilePath)) {
                                create_img_thumb($path, $filename);
                            }
                            array_push($filesIDS, $insert_id);
                        } else {
                            unlink($newFilePath);

                            return false;
                        }
                    }
                }
            }
        }

        if (count($filesIDS) > 0) {
            $CI->load->model('activities_model');
            end($filesIDS);
            $lastFileID = key($filesIDS);
            $CI->activities_model->new_activity_file_notification($filesIDS[$lastFileID], $project_id);
        }

        if (count($errors) > 0) {
            $message = '';
            foreach ($errors as $filename => $error_message) {
                $message .= $filename . ' - ' . $error_message . '<br />';
            }
            header('HTTP/1.0 400 Bad error');
            echo $message;
            die;
        }

        if (count($filesIDS) > 0) {
            return true;
        }

        return false;
    }
    /**
     * Handle contract attachments if any
     * @param  mixed $contractid
     * @return boolean
     */
    function handle_contract_attachment($id)
    {
        if (isset($_FILES['file']) && _internal_upload_error($_FILES['file']['error'])) {
            header('HTTP/1.0 400 Bad error');
            echo _internal_upload_error($_FILES['file']['error']);
            die;
        }
        if (isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
            do_action('before_upload_contract_attachment', $id);
            $path = get_upload_path_by_type('contract') . $id . '/';
            // Get the temp file path
            $tmpFilePath = $_FILES['file']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                _maybe_create_upload_path($path);
                $filename    = unique_filename($path, $_FILES['file']['name']);
                $newFilePath = $path . $filename;
                // Upload the file into the company uploads dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $CI           = & get_instance();
                    $attachment   = [];
                    $attachment[] = [
                        'file_name' => $filename,
                        'filetype'  => $_FILES['file']['type'],
                        ];
                    $CI->misc_model->add_attachment_to_database($id, 'contract', $attachment);

                    return true;
                }
            }
        }

        return false;
    }
    /**
     * Handle lead attachments if any
     * @param  mixed $leadid
     * @return boolean
     */
    function handle_lead_attachments($leadid, $index_name = 'file', $form_activity = false)
    {
        if (isset($_FILES[$index_name]) && empty($_FILES[$index_name]['name']) && $form_activity) {
            return;
        }

        if (isset($_FILES[$index_name]) && _internal_upload_error($_FILES[$index_name]['error'])) {
            header('HTTP/1.0 400 Bad error');
            echo _internal_upload_error($_FILES[$index_name]['error']);
            die;
        }

        $CI = & get_instance();
        if (isset($_FILES[$index_name]['name']) && $_FILES[$index_name]['name'] != '') {
            do_action('before_upload_lead_attachment', $leadid);
            $path = get_upload_path_by_type('lead') . $leadid . '/';
            // Get the temp file path
            $tmpFilePath = $_FILES[$index_name]['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                if (!_upload_extension_allowed($_FILES[$index_name]['name'])) {
                    return false;
                }

                _maybe_create_upload_path($path);

                $filename    = unique_filename($path, $_FILES[$index_name]['name']);
                $newFilePath = $path . $filename;
                // Upload the file into the company uploads dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $CI = & get_instance();
                    $CI->load->model('leads_model');
                    $data   = [];
                    $data[] = [
                        'file_name' => $filename,
                        'filetype'  => $_FILES[$index_name]['type'],
                        ];
                    $CI->leads_model->add_attachment_to_database($leadid, $data, false, $form_activity);

                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Task attachments upload array
     * Multiple task attachments can be upload if input type is array or dropzone plugin is used
     * @param  mixed $taskid     task id
     * @param  string $index_name attachments index, in different forms different index name is used
     * @return mixed
     */
    function handle_task_attachments_array($taskid, $index_name = 'attachments')
    {
        $uploaded_files = [];
        $path           = get_upload_path_by_type('task') . $taskid . '/';
        $CI             = &get_instance();

        if (isset($_FILES[$index_name]['name'])
            && ($_FILES[$index_name]['name'] != '' || is_array($_FILES[$index_name]['name']) && count($_FILES[$index_name]['name']) > 0)) {
            if (!is_array($_FILES[$index_name]['name'])) {
                $_FILES[$index_name]['name']     = [$_FILES[$index_name]['name']];
                $_FILES[$index_name]['type']     = [$_FILES[$index_name]['type']];
                $_FILES[$index_name]['tmp_name'] = [$_FILES[$index_name]['tmp_name']];
                $_FILES[$index_name]['error']    = [$_FILES[$index_name]['error']];
                $_FILES[$index_name]['size']     = [$_FILES[$index_name]['size']];
            }

            _file_attachments_index_fix($index_name);
            for ($i = 0; $i < count($_FILES[$index_name]['name']); $i++) {
                // Get the temp file path
                $tmpFilePath = $_FILES[$index_name]['tmp_name'][$i];

                // Make sure we have a filepath
                if (!empty($tmpFilePath) && $tmpFilePath != '') {
                    if (_internal_upload_error($_FILES[$index_name]['error'][$i])
                        || !_upload_extension_allowed($_FILES[$index_name]['name'][$i])) {
                        continue;
                    }

                    _maybe_create_upload_path($path);
                    $filename    = unique_filename($path, $_FILES[$index_name]['name'][$i]);
                    $newFilePath = $path . $filename;

                    // Upload the file into the temp dir
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        array_push($uploaded_files, [
                        'file_name' => $filename,
                        'filetype'  => $_FILES[$index_name]['type'][$i],
                        ]);
                        if (is_image($newFilePath)) {
                            create_img_thumb($path, $filename);
                        }
                    }
                }
            }
        }

        if (count($uploaded_files) > 0) {
            return $uploaded_files;
        }

        return false;
    }

    /**
     * Invoice attachments
     * @param  mixed $invoiceid invoice ID to add attachments
     * @return array  - Result values
     */
    function handle_sales_attachments($rel_id, $rel_type)
    {
        if (isset($_FILES['file']) && _internal_upload_error($_FILES['file']['error'])) {
            header('HTTP/1.0 400 Bad error');
            echo _internal_upload_error($_FILES['file']['error']);
            die;
        }

        $path = get_upload_path_by_type($rel_type) . $rel_id . '/';

        $CI = & get_instance();
        if (isset($_FILES['file']['name'])) {
            $uploaded_files = false;
            // Get the temp file path
            $tmpFilePath = $_FILES['file']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                // Getting file extension
                $type = $_FILES['file']['type'];
                _maybe_create_upload_path($path);
                $filename    = unique_filename($path, $_FILES['file']['name']);
                $newFilePath = $path . $filename;
                // Upload the file into the temp dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $file_uploaded = true;
                    $attachment    = [];
                    $attachment[]  = [
                        'file_name' => $filename,
                        'filetype'  => $type,
                        ];
                    $insert_id = $CI->misc_model->add_attachment_to_database($rel_id, $rel_type, $attachment);
                    // Get the key so we can return to ajax request and show download link
                    $CI->db->where('id', $insert_id);
                    $_attachment = $CI->db->get('tblfiles')->row();
                    $key         = $_attachment->attachment_key;

                    if ($rel_type == 'invoice') {
                        $CI->load->model('invoices_model');
                        $CI->invoices_model->log_invoice_activity($rel_id, 'invoice_activity_added_attachment');
                    } elseif ($rel_type == 'estimate') {
                        $CI->load->model('estimates_model');
                        $CI->estimates_model->log_estimate_activity($rel_id, 'estimate_activity_added_attachment');
                    }
                }
            }
            if ($file_uploaded == true) {
                echo json_encode([
                    'success'       => true,
                    'attachment_id' => $insert_id,
                    'filetype'      => $type,
                    'rel_id'        => $rel_id,
                    'file_name'     => $filename,
                    'key'           => $key,
                ]);
            } else {
                echo json_encode([
                    'success'   => false,
                    'rel_id'    => $rel_id,
                    'file_name' => $filename,
                ]);
            }
        }
    }
    /**
     * Client attachments
     * @param  mixed $clientid Client ID to add attachments
     * @return array  - Result values
     */
    function handle_client_attachments_upload($id, $customer_upload = false)
    {
        $path = get_upload_path_by_type('customer') . $id . '/';
        $CI   = & get_instance();
        $totalUploaded = 0;

        if (isset($_FILES['file']['name'])
            && ($_FILES['file']['name'] != '' || is_array($_FILES['file']['name']) && count($_FILES['file']['name']) > 0)) {
            if (!is_array($_FILES['file']['name'])) {
                $_FILES['file']['name']     = [$_FILES['file']['name']];
                $_FILES['file']['type']     = [$_FILES['file']['type']];
                $_FILES['file']['tmp_name'] = [$_FILES['file']['tmp_name']];
                $_FILES['file']['error']    = [$_FILES['file']['error']];
                $_FILES['file']['size']     = [$_FILES['file']['size']];
            }

            _file_attachments_index_fix('file');
            for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
                do_action('before_upload_client_attachment', $id);
                // Get the temp file path
                $tmpFilePath = $_FILES['file']['tmp_name'][$i];
                // Make sure we have a filepath
                if (!empty($tmpFilePath) && $tmpFilePath != '') {
                    if (_internal_upload_error($_FILES['file']['error'][$i])
                        || !_upload_extension_allowed($_FILES['file']['name'][$i])) {
                        continue;
                    }

                    _maybe_create_upload_path($path);
                    $filename    = unique_filename($path, $_FILES['file']['name'][$i]);
                    $newFilePath = $path . $filename;
                    // Upload the file into the temp dir
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        $attachment   = [];
                        $attachment[] = [
                        'file_name' => $filename,
                        'filetype'  => $_FILES['file']['type'][$i],
                        ];

                        if (is_image($newFilePath)) {
                            create_img_thumb($newFilePath, $filename);
                        }

                        if ($customer_upload == true) {
                            $attachment[0]['staffid']          = 0;
                            $attachment[0]['contact_id']       = get_contact_user_id();
                            $attachment['visible_to_customer'] = 1;
                        }

                        $CI->misc_model->add_attachment_to_database($id, 'customer', $attachment);
                        $totalUploaded++;
                    }
                }
            }
        }

        return (bool) $totalUploaded;
    }
    /**
     * Handles upload for expenses receipt
     * @param  mixed $id expense id
     * @return void
     */
    function handle_expense_attachments($id)
    {
        if (isset($_FILES['file']) && _internal_upload_error($_FILES['file']['error'])) {
            header('HTTP/1.0 400 Bad error');
            echo _internal_upload_error($_FILES['file']['error']);
            die;
        }
        $path = get_upload_path_by_type('expense') . $id . '/';
        $CI   = & get_instance();

        if (isset($_FILES['file']['name'])) {
            do_action('before_upload_expense_attachment', $id);
            // Get the temp file path
            $tmpFilePath = $_FILES['file']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                _maybe_create_upload_path($path);
                $filename    = $_FILES['file']['name'];
                $newFilePath = $path . $filename;
                // Upload the file into the temp dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $attachment   = [];
                    $attachment[] = [
                        'file_name' => $filename,
                        'filetype'  => $_FILES['file']['type'],
                        ];

                    $CI->misc_model->add_attachment_to_database($id, 'expense', $attachment);
                }
            }
        }
    }
    /**
     * Handles upload for cashflow receipt
     * @param  mixed $id cashflow id
     * @return void
     */
    function handle_cashflow_attachments($id)
    {
        if (isset($_FILES['file']) && _internal_upload_error($_FILES['file']['error'])) {
            header('HTTP/1.0 400 Bad error');
            echo _internal_upload_error($_FILES['file']['error']);
            die;
        }
        $path = get_upload_path_by_type('cashflow') . $id . '/';
        $CI   = & get_instance();

        if (isset($_FILES['file']['name'])) {
            do_action('before_upload_cashflow_attachment', $id);
            // Get the temp file path
            $tmpFilePath = $_FILES['file']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                _maybe_create_upload_path($path);
                $filename    = $_FILES['file']['name'];
                $newFilePath = $path . $filename;
                // Upload the file into the temp dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $attachment   = [];
                    $attachment[] = [
                        'file_name' => $filename,
                        'filetype'  => $_FILES['file']['type'],
                        ];

                    $CI->misc_model->add_attachment_to_database($id, 'cashflow', $attachment);
                }
            }
        }
    }
    /**
     * Handles upload for cashflow receipt
     * @param  mixed $id cashflow id
     * @return void
     */
    function handle_knowledge_base_attachments($id)
    {
        if (isset($_FILES['file']) && _internal_upload_error($_FILES['file']['error'])) {
            header('HTTP/1.0 400 Bad error');
            echo _internal_upload_error($_FILES['file']['error']);
            die;
        }
        $path = get_upload_path_by_type('knowledge_base') . $id . '/';
        $CI   = & get_instance();

        if (isset($_FILES['file']['name'])) {
            do_action('before_upload_knowledge_base_attachment', $id);
            // Get the temp file path
            $tmpFilePath = $_FILES['file']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                _maybe_create_upload_path($path);
                $filename    = $_FILES['file']['name'];
                $newFilePath = $path . $filename;
                // Upload the file into the temp dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $attachment   = [];
                    $attachment[] = [
                        'file_name' => $filename,
                        'filetype'  => $_FILES['file']['type'],
                        ];

                    $CI->misc_model->add_attachment_to_database($id, 'knowledge_base', $attachment);
                }
            }
        }
    }
    /**
     * Handles upload for profile receipt
     * @param  mixed $id profile id
     * @return void
     */
    function handle_staff_files_attachments($id)
    {
        if (isset($_FILES['file']) && _internal_upload_error($_FILES['file']['error'])) {
            header('HTTP/1.0 400 Bad error');
            echo _internal_upload_error($_FILES['file']['error']);
            die;
        }
        $path = get_upload_path_by_type('staff_files') . $id . '/';
        $CI   = & get_instance();

        if (isset($_FILES['file']['name'])) {
            do_action('before_upload_staff_files_attachment', $id);
            // Get the temp file path
            $tmpFilePath = $_FILES['file']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                _maybe_create_upload_path($path);
                $filename    = $_FILES['file']['name'];
                $newFilePath = $path . $filename;
                // Upload the file into the temp dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $attachment   = [];
                    $attachment[] = [
                        'file_name' => $filename,
                        'filetype'  => $_FILES['file']['type'],
                        ];

                    $CI->misc_model->add_attachment_to_database($id, 'staff_files', $attachment);
                }
            }
        }
    }
    /**
     * Check for ticket attachment after inserting ticket to database
     * @param  mixed $ticketid
     * @return mixed           false if no attachment || array uploaded attachments
     */
    function handle_ticket_attachments($ticketid, $index_name = 'attachments')
    {
        $path           = get_upload_path_by_type('ticket') . $ticketid . '/';
        $uploaded_files = [];

        if (isset($_FILES[$index_name])) {
            _file_attachments_index_fix($index_name);

            for ($i = 0; $i < count($_FILES[$index_name]['name']); $i++) {
                do_action('before_upload_ticket_attachment', $ticketid);
                if ($i <= get_option('maximum_allowed_ticket_attachments')) {
                    // Get the temp file path
                    $tmpFilePath = $_FILES[$index_name]['tmp_name'][$i];
                    // Make sure we have a filepath
                    if (!empty($tmpFilePath) && $tmpFilePath != '') {
                        // Getting file extension
                        $path_parts = pathinfo($_FILES[$index_name]['name'][$i]);
                        $extension  = $path_parts['extension'];

                        $extension          = strtolower($extension);
                        $allowed_extensions = explode(',', get_option('ticket_attachments_file_extensions'));
                        $allowed_extensions = array_map('trim', $allowed_extensions);
                        // Check for all cases if this extension is allowed
                        if (!in_array('.' . $extension, $allowed_extensions)) {
                            continue;
                        }
                        _maybe_create_upload_path($path);
                        $filename    = unique_filename($path, $_FILES[$index_name]['name'][$i]);
                        $newFilePath = $path . $filename;
                        // Upload the file into the temp dir
                        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                            array_push($uploaded_files, [
                                    'file_name' => $filename,
                                    'filetype'  => $_FILES[$index_name]['type'][$i],
                                    ]);
                        }
                    }
                }
            }
        }
        if (count($uploaded_files) > 0) {
            return $uploaded_files;
        }

        return false;
    }
    /**
     * Check for company logo upload
     * @return boolean
     */
    function handle_company_logo_upload()
    {
        $logoIndex = ['logo', 'logo_dark'];
        $success   = false;
        foreach ($logoIndex as $logo) {
            $index = 'company_' . $logo;

            if (isset($_FILES[$index]) && _internal_upload_error($_FILES[$index]['error'])) {
                set_alert('warning', _internal_upload_error($_FILES[$index]['error']));

                return false;
            }
            if (isset($_FILES[$index]['name']) && $_FILES[$index]['name'] != '') {
                do_action('before_upload_company_logo_attachment');
                $path = get_upload_path_by_type('company');
                // Get the temp file path
                $tmpFilePath = $_FILES[$index]['tmp_name'];
                // Make sure we have a filepath
                if (!empty($tmpFilePath) && $tmpFilePath != '') {
                    // Getting file extension
                    $path_parts         = pathinfo($_FILES[$index]['name']);
                    $extension          = $path_parts['extension'];
                    $extension          = strtolower($extension);
                    $allowed_extensions = [
                    'jpg',
                    'jpeg',
                    'png',
                    'gif',
                ];

                    if (!in_array($extension, $allowed_extensions)) {
                        set_alert('warning', 'Image extension not allowed.');

                        continue;
                    }

                    // Setup our new file path
                    $filename    = $logo . '.' . $extension;
                    $newFilePath = $path . $filename;
                    _maybe_create_upload_path($path);
                    // Upload the file into the company uploads dir
                    if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                        update_option($index, $filename);
                        $success = true;
                    }
                }
            }
        }


        return $success;
    }
    /**
     * Check for company logo upload
     * @return boolean
     */
    function handle_company_signature_upload()
    {
        if (isset($_FILES['signature_image']) && _internal_upload_error($_FILES['signature_image']['error'])) {
            set_alert('warning', _internal_upload_error($_FILES['signature_image']['error']));

            return false;
        }
        if (isset($_FILES['signature_image']['name']) && $_FILES['signature_image']['name'] != '') {
            do_action('before_upload_signature_image_attachment');
            $path = get_upload_path_by_type('company');
            // Get the temp file path
            $tmpFilePath = $_FILES['signature_image']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                // Getting file extension
                $path_parts = pathinfo($_FILES['signature_image']['name']);
                $extension  = $path_parts['extension'];
                $extension  = strtolower($extension);

                $allowed_extensions = [
                    'jpg',
                    'jpeg',
                    'png',
                ];
                if (!in_array($extension, $allowed_extensions)) {
                    set_alert('warning', 'Image extension not allowed.');

                    return false;
                }
                // Setup our new file path
                $filename    = 'signature' . '.' . $extension;
                $newFilePath = $path . $filename;
                _maybe_create_upload_path($path);
                // Upload the file into the company uploads dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    update_option('signature_image', $filename);

                    return true;
                }
            }
        }

        return false;
    }
    /**
     * Handle company favicon upload
     * @return boolean
     */
    function handle_favicon_upload()
    {
        if (isset($_FILES['favicon']['name']) && $_FILES['favicon']['name'] != '') {
            do_action('before_upload_favicon_attachment');
            $path = get_upload_path_by_type('company');
            // Get the temp file path
            $tmpFilePath = $_FILES['favicon']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                // Getting file extension
                $path_parts = pathinfo($_FILES['favicon']['name']);
                $extension  = $path_parts['extension'];
                $extension  = strtolower($extension);
                // Setup our new file path
                $filename    = 'favicon' . '.' . $extension;
                $newFilePath = $path . $filename;
                _maybe_create_upload_path($path);
                // Upload the file into the company uploads dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    update_option('favicon', $filename);

                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Maybe upload staff profile image
     * @param  string $staff_id staff_id or current logged in staff id will be used if not passed
     * @return boolean
     */
    function handle_staff_profile_image_upload($staff_id = '')
    {
        if (!is_numeric($staff_id)) {
            $staff_id = get_staff_user_id();
        }
        if (isset($_FILES['profile_image']['name']) && $_FILES['profile_image']['name'] != '') {
            do_action('before_upload_staff_profile_image');
            $path = get_upload_path_by_type('staff') . $staff_id . '/';
            // Get the temp file path
            $tmpFilePath = $_FILES['profile_image']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                // Getting file extension
                $path_parts         = pathinfo($_FILES['profile_image']['name']);
                $extension          = $path_parts['extension'];
                $extension          = strtolower($extension);
                $allowed_extensions = [
                    'jpg',
                    'jpeg',
                    'png',
                ];
                if (!in_array($extension, $allowed_extensions)) {
                    set_alert('warning', LanguageUtils::l('file_php_extension_blocked'));

                    return false;
                }
                _maybe_create_upload_path($path);
                $filename    = unique_filename($path, $_FILES['profile_image']['name']);
                $newFilePath = $path . '/' . $filename;
                // Upload the file into the company uploads dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $CI                       = & get_instance();
                    $config                   = [];
                    $config['image_library']  = 'gd2';
                    $config['source_image']   = $newFilePath;
                    $config['new_image']      = 'thumb_' . $filename;
                    $config['maintain_ratio'] = true;
                    $config['width']          = 160;
                    $config['height']         = 160;
                    $CI->image_lib->initialize($config);
                    $CI->image_lib->resize();
                    $CI->image_lib->clear();
                    $config['image_library']  = 'gd2';
                    $config['source_image']   = $newFilePath;
                    $config['new_image']      = 'small_' . $filename;
                    $config['maintain_ratio'] = true;
                    $config['width']          = 32;
                    $config['height']         = 32;
                    $CI->image_lib->initialize($config);
                    $CI->image_lib->resize();
                    $CI->db->where('STAFFID', $staff_id);
                    $CI->db->update('TBLSTAFF', [
                        'PROFILE_IMAGE' => $filename,
                    ]);
                    // Remove original image
                    unlink($newFilePath);

                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Maybe upload contact profile image
     * @param  string $contact_id contact_id or current logged in contact id will be used if not passed
     * @return boolean
     */
    function handle_contact_profile_image_upload($contact_id = '')
    {
        if (isset($_FILES['profile_image']['name']) && $_FILES['profile_image']['name'] != '') {
            do_action('before_upload_contact_profile_image');
            if ($contact_id == '') {
                $contact_id = get_contact_user_id();
            }
            $path = get_upload_path_by_type('contact_profile_images') . $contact_id . '/';
            // Get the temp file path
            $tmpFilePath = $_FILES['profile_image']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                // Getting file extension
                $path_parts         = pathinfo($_FILES['profile_image']['name']);
                $extension          = $path_parts['extension'];
                $extension          = strtolower($extension);
                $allowed_extensions = [
                    'jpg',
                    'jpeg',
                    'png',
                ];
                if (!in_array($extension, $allowed_extensions)) {
                    set_alert('warning', LanguageUtils::l('file_php_extension_blocked'));

                    return false;
                }
                _maybe_create_upload_path($path);
                $filename    = unique_filename($path, $_FILES['profile_image']['name']);
                $newFilePath = $path . $filename;
                // Upload the file into the company uploads dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $CI                       = & get_instance();
                    $config                   = [];
                    $config['image_library']  = 'gd2';
                    $config['source_image']   = $newFilePath;
                    $config['new_image']      = 'thumb_' . $filename;
                    $config['maintain_ratio'] = true;
                    $config['width']          = 160;
                    $config['height']         = 160;
                    $CI->image_lib->initialize($config);
                    $CI->image_lib->resize();
                    $CI->image_lib->clear();
                    $config['image_library']  = 'gd2';
                    $config['source_image']   = $newFilePath;
                    $config['new_image']      = 'small_' . $filename;
                    $config['maintain_ratio'] = true;
                    $config['width']          = 32;
                    $config['height']         = 32;
                    $CI->image_lib->initialize($config);
                    $CI->image_lib->resize();

                    $CI->db->where('ID', $contact_id);
                    $CI->db->update('TBLCONTACTS', [
                        'PROFILE_IMAGE' => $filename,
                    ]);
                    // Remove original image
                    unlink($newFilePath);

                    return true;
                }
            }
        }

        return false;
    }
    /**
     * Handle upload for project discussions comment
     * Function for jquery-comment plugin
     * @param  mixed $discussion_id discussion id
     * @param  mixed $post_data     additional post data from the comment
     * @param  array $insert_data   insert data to be parsed if needed
     * @return arrray
     */
    function handle_project_discussion_comment_attachments($discussion_id, $post_data, $insert_data)
    {
        if (isset($_FILES['file']['name']) && _internal_upload_error($_FILES['file']['error'])) {
            header('HTTP/1.0 400 Bad error');
            echo json_encode(['message' => _internal_upload_error($_FILES['file']['error'])]);
            die;
        }

        if (isset($_FILES['file']['name'])) {
            do_action('before_upload_project_discussion_comment_attachment');
            $path = PROJECT_DISCUSSION_ATTACHMENT_FOLDER . $discussion_id . '/';

            // Check for all cases if this extension is allowed
            if (!_upload_extension_allowed($_FILES['file']['name'])) {
                header('HTTP/1.0 400 Bad error');
                echo json_encode(['message' => LanguageUtils::l('file_php_extension_blocked')]);
                die;
            }

            // Get the temp file path
            $tmpFilePath = $_FILES['file']['tmp_name'];
            // Make sure we have a filepath
            if (!empty($tmpFilePath) && $tmpFilePath != '') {
                _maybe_create_upload_path($path);
                $filename    = unique_filename($path, $_FILES['file']['name']);
                $newFilePath = $path . $filename;
                // Upload the file into the temp dir
                if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                    $insert_data['file_name'] = $filename;

                    if (isset($_FILES['file']['type'])) {
                        $insert_data['file_mime_type'] = $_FILES['file']['type'];
                    } else {
                        $insert_data['file_mime_type'] = get_mime_by_extension($filename);
                    }
                }
            }
        }

        return $insert_data;
    }

    /**
     * Create thumbnail from image
     * @param  string  $path     imat path
     * @param  string  $filename filename to store
     * @param  integer $width    width of thumb
     * @param  integer $height   height of thumb
     * @return null
     */
    function create_img_thumb($path, $filename, $width = 300, $height = 300)
    {
        $CI = &get_instance();

        $source_path  = rtrim($path, '/') . '/' . $filename;
        $target_path  = $path;
        $config_manip = [
            'image_library'  => 'gd2',
            'source_image'   => $source_path,
            'new_image'      => $target_path,
            'maintain_ratio' => true,
            'create_thumb'   => true,
            'thumb_marker'   => '_thumb',
            'width'          => $width,
            'height'         => $height,
        ];

        $CI->image_lib->initialize($config_manip);
        $CI->image_lib->resize();
        $CI->image_lib->clear();
    }

    /**
     * Check if extension is allowed for upload
     * @param  string $filename filename
     * @return boolean
     */
    static function upload_extension_allowed($filename)
    {
        $path_parts         = pathinfo($filename);
        $extension          = $path_parts['extension'];
        $extension          = strtolower($extension);
        $allowed_extensions = explode(',', get_option('allowed_files'));
        $allowed_extensions = array_map('trim', $allowed_extensions);
        // Check for all cases if this extension is allowed
        if (!in_array('.' . $extension, $allowed_extensions)) {
            return false;
        }

        return true;
    }

    /**
     * Performs fixes when $_FILES is array and the index is messed up
     * Eq user click on + then remove the file and then added new file
     * In this case the indexes will be 0,2 - 1 is missing because it's removed but they should be 0,1
     * @param  string $index_name $_FILES index name
     * @return null
     */
    function _file_attachments_index_fix($index_name)
    {
        if (isset($_FILES[$index_name]['name']) && is_array($_FILES[$index_name]['name'])) {
            $_FILES[$index_name]['name'] = array_values($_FILES[$index_name]['name']);
        }

        if (isset($_FILES[$index_name]['type']) && is_array($_FILES[$index_name]['type'])) {
            $_FILES[$index_name]['type'] = array_values($_FILES[$index_name]['type']);
        }

        if (isset($_FILES[$index_name]['tmp_name']) && is_array($_FILES[$index_name]['tmp_name'])) {
            $_FILES[$index_name]['tmp_name'] = array_values($_FILES[$index_name]['tmp_name']);
        }

        if (isset($_FILES[$index_name]['error']) && is_array($_FILES[$index_name]['error'])) {
            $_FILES[$index_name]['error'] = array_values($_FILES[$index_name]['error']);
        }

        if (isset($_FILES[$index_name]['size']) && is_array($_FILES[$index_name]['size'])) {
            $_FILES[$index_name]['size'] = array_values($_FILES[$index_name]['size']);
        }
    }

    /**
     * Check if path exists if not exists will create one
     * This is used when uploading files
     * @param  string $path path to check
     * @return null
     */
    function _maybe_create_upload_path($path)
    {
        if (!file_exists($path)) {
            mkdir($path);
            fopen(rtrim($path, '/') . '/' . 'index.html', 'w');
        }
    }

    /**
     * Check if path exists if not exists will create one
     * This is used when uploading files
     * @param  string $path path to check
     * @return null
     */
    static function maybe_create_upload_path($path)
    {
        if (!file_exists($path)) {
            mkdir($path);
            fopen(rtrim($path, '/') . '/' . 'index.html', 'w');
        }
    }

    /**
    * Function that return full path for
    * upload based on passed type and workspace
    * @param  string $type
    * @return string
    */
    public static function get_upload_path_workspace_by_type($workspace,$type){
        if (!UploadHelper::get_upload_path_by_type($type))
           return false; 
        UploadHelper::maybe_create_upload_path(Setup::getUploadDefaultFolder() . '/' . $workspace);
        UploadHelper::maybe_create_upload_path(Setup::getUploadDefaultFolder() . '/' . $workspace . '/' . UploadHelper::get_upload_path_by_type($type));
        return Setup::getUploadDefaultFolder() . '/' . $workspace . '/' . UploadHelper::get_upload_path_by_type($type);
    }

    /**
    * Function that return full path for
    * upload based on passed type
    * @param  string $type
    * @return string
    */
    public static function get_upload_path_default_by_type($type){
        if (!UploadHelper::get_upload_path_by_type($type))
           return false; 
        return Setup::getUploadDefaultFolder() . UploadHelper::get_upload_path_by_type($type);
    }

    /**
    * Function that return partial path for
    * upload based on passed type
    * @param  string $type
    * @return string
    */
    static function get_upload_path_by_type($type)
    {
        switch ($type) {
            case 'inbox':
                return Constants::INBOX_FOLDER;

            break;
            case 'lead':
                return Constants::LEAD_ATTACHMENTS_FOLDER;

            break;
            case 'expense':
                return Constants::EXPENSE_ATTACHMENTS_FOLDER;

            break;
            case 'project':
                return Constants::PROJECT_ATTACHMENTS_FOLDER;

            break;
            case 'proposal':
                return Constants::PROPOSAL_ATTACHMENTS_FOLDER;

            break;
            case 'estimate':
                return Constants::ESTIMATE_ATTACHMENTS_FOLDER;

            break;
            case 'invoice':
                return Constants::INVOICE_ATTACHMENTS_FOLDER;

            break;
            case 'credit_note':
                return Constants::CREDIT_NOTES_ATTACHMENTS_FOLDER;

            break;
            case 'task':
                return Constants::TASKS_ATTACHMENTS_FOLDER;

            break;
            case 'contract':
                return Constants::CONTRACTS_UPLOADS_FOLDER;

            break;
            case 'customer':
                return Constants::CLIENT_ATTACHMENTS_FOLDER;

            break;
            case 'staff':
                return Constants::STAFF_PROFILE_IMAGES_FOLDER;

            break;
            case 'staff_files':
                return Constants::STAFF_ATTACHMENTS_FOLDER;
        
            break;
            case 'company':
                return Constants::COMPANY_FILES_FOLDER;

            break;
            case 'ticket':
                return Constants::TICKET_ATTACHMENTS_FOLDER;

            break;
            case 'contact_profile_images':
                return Constants::CONTACT_PROFILE_IMAGES_FOLDER;

            break;
            case 'activity':
                return Constants::ACTIVITY_ATTACHMENTS_FOLDER;

            break;
            case 'cashflow':
                return Constants::CASHFLOW_ATTACHMENTS_FOLDER;

            break;
            case 'knowledge_base':
                return Constants::KNOWLEDGE_BASE_ATTACHMENTS_FOLDER;

            break;
            case 'newsfeed':
                return Constants::NEWSFEED_FOLDER;            

            break;
            case 'message':
                return Constants::MESSAGE_FOLDER;

            break;
            default:
                return false;
        }
    }

}
