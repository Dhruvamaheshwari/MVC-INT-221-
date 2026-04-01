<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


// import this line
use Illuminate\Support\Facades\Route;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // add the routing globley
        // Route::pattern('name', '[A-Za-z]+');
    }
}
