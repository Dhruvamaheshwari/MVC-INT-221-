<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view::share('data', 'My name is Dhruva Maheshwari');
        view::share('info', 'Hello');
        view::share('details', 'Bye bye');


        // Additional topic for dynamic shared data
        view::composer('*' , function($view)
        {
            $time = date('H:i:s');
            $view -> with('time' , $time);
        });
    }
}
