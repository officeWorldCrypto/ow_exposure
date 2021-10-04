<?php 

namespace App\Library;
use App\Library\LanguagePtBr;
use App\Library\LanguageEnglish;

final class LanguageUtils {

    function get_current_date_format()
    {
        return 'd/m/yyyy';
    }
   

    /**
     * Outputs language string based on passed line
     * @since  Version 1.0.1
     * @param  string $line  language line string
     * @param  string $label sprint_f label
     * @return string        formatted language
     */
    public static function l($label = '', $args = '')
    {

        if ($args!=''){
            $line = Self::translate($label); 
            if (is_array($args) && count($args) > 0) {
                $_line = vsprintf($line, $args);
            } else {
                $_line = @sprintf($line, $args);
            }
            return $_line;
        }        
        return Self::translate($label);

    }

    // for only one call to PtBr_lang for example
    private static function translate($label) {
        $definedLanguage = 'ptbr';
        switch($definedLanguage) {
            case 'english': return LanguageEnglish::t($label);
            case 'ptbr': return LanguagePtBr::t($label);
        }
    }

    /**
     * Format date to selected dateformat
     * @param  date $date Valid date
     * @return date/string
     */
    function d($date)
    {        
        if ($date == '' || is_null($date) || $date == '0000-00-00') {
            return '';
        }        
        if (strpos($date, ' ')>0){
            return $this->dt($date);
        }        
        $format = $this->get_current_date_format();
        $date   = strftime($format, strtotime($date));
        return $date;
    }

    /**
     * Format datetime to selected datetime format
     * @param  datetime $date datetime date
     * @return datetime/string
     */
    function dt($date, $is_timesheet = false)
    {
        if ($date == '' || is_null($date) || $date == '0000-00-00 00:00:00') {
            return '';
        }
        $format = $this->get_current_date_format();
        $hour12 = false;

        if ($is_timesheet == false) {
            $date = strtotime($date);
        }

        if ($hour12 == false) {
            $tf = '%H:%M:%S';
            if ($is_timesheet == true) {
                $tf = '%H:%M';
            }
            $date = strftime($format . ' ' . $tf, $date);
        } else {
            $date = date($this->get_current_date_format(true) . ' g:i A', $date);
        }

        return $date;
    }

    

}