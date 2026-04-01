<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // hame yaha add krna hoga globle condition 
        Route::pattern('name' , "[a-zA-Z]+");
        Route::pattern('age' , '[0-9]+');
    }
}
