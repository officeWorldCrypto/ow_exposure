<?php

namespace App\Library;

class Setup {

    static function getUploadDefaultFolder() {
        return getenv('EI_UPLOAD');
    }

}