<?php 

namespace App\Library;
use App\Library\LanguageUtils;

final class DateTimeUtils {
    
    public function __construct()
    {
    
    }

    /* Date translated 
    * @param  datetime $date
    * @return mixed
    */
    static function d($date){
        $date = new \DateTime($date);
        return $date->format('d/m/Y');
    }
    
    /* DateTime translated 
    * @param  datetime $dateTime
    * @return mixed
    */
    static function dt($dateTime){
        $date = new \DateTime($dateTime);
        return $date->format('d/m/Y H:i:s');
    }
    
    /* Short Time ago function
    * @param  datetime $time_ago
    * @return mixed
    */
    static function time_ago($time_ago)
    {
        $time_ago     = strtotime($time_ago);
        $cur_time     = time();
        $time_elapsed = $cur_time - $time_ago;
        $seconds      = $time_elapsed;
        $minutes      = round($time_elapsed / 60);
        $hours        = round($time_elapsed / 3600);
        $days         = round($time_elapsed / 86400);
        $weeks        = round($time_elapsed / 604800);
        $months       = round($time_elapsed / 2600640);
        $years        = round($time_elapsed / 31207680);
        // Seconds
        if ($seconds <= 60) {
            return LanguageUtils::l('time_ago_just_now');
        }
        //Minutes
        elseif ($minutes <= 60) {
            if ($minutes == 1) {
                return LanguageUtils::l('time_ago_minute');
            }
    
            return LanguageUtils::l('time_ago_minutes', $minutes);
        }
        //Hours
        elseif ($hours <= 24) {
            if ($hours == 1) {
                return LanguageUtils::l('time_ago_hour');
            }
    
            return LanguageUtils::l('time_ago_hours', $hours);
        }
        //Days
        elseif ($days <= 7) {
            if ($days == 1) {
                return LanguageUtils::l('time_ago_yesterday');
            }
    
            return LanguageUtils::l('time_ago_days', $days);
        }
        //Weeks
        elseif ($weeks <= 4.3) {
            if ($weeks == 1) {
                return LanguageUtils::l('time_ago_week');
            }
    
            return LanguageUtils::l('time_ago_weeks', $weeks);
        }
        //Months
        elseif ($months <= 12) {
            if ($months == 1) {
                return LanguageUtils::l('time_ago_month');
            }
    
            return LanguageUtils::l('time_ago_months', $months);
        }
        //Years
    
        if ($years == 1) {
            return LanguageUtils::l('time_ago_year');
        }
    
        return LanguageUtils::l('time_ago_years', $years);
    }

}