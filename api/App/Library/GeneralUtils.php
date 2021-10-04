<?php 

namespace App\Library;

final class GeneralUtils {

    /**
     * Generate md5 hash
    * @return string
    */
    static function app_generate_hash()
    {
        return md5(rand() . microtime() . time() . uniqid());
    }
}