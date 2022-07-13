<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use URL;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * 
     *
     * @return void
     */
    public function boot()
    {
        if (str_contains(Config::get('app.url'), 'https://')) {
            URL::forceScheme('https');
        }
    }

    /**
     * 
     *
     * @return void
     */
    public function register()
    {
    }
}
