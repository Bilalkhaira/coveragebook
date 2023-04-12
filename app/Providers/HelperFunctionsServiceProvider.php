<?php

namespace App\Providers;

use App\Helpers\HelperFunctions;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class HelperFunctionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('helperfunctions',function(){
            return new HelperFunctions();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->app->bind('helperfunctions',function(){
        //     return new HelperFunctions();
        // });
    }
}
