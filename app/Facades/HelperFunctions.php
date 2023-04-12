<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class HelperFunctions extends Facade {

    protected static function getFacadeAccessor() { 
        // dd('ok');
        return 'helperfunctions'; 
    }

}