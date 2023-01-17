<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersLoadetProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $file = app_path('Helpers/allHelpers.php');
        if (file_exists($file)) {
            require_once($file);
        }

        // $catBase = app_path('Helpers/categoryBase.php');
        // if (file_exists($catBase)) {
        //     require_once($catBase);
        // }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
