<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // in this function we have to registure the middleware
        
        /*
            $middleware -> alias([
            'checkRoleandAge' => App\Http\Middleware\MiddlewareIS::class,
            ]);
         */
            
        // registure the Construct middleware
        $middleware -> alias([
            'ageChecking' => App\Http\Middleware\ConstructMiddleware::class
        ]);

        $middleware -> alias([
            'checkNameCountry' => App\Http\Middleware\Task4Middleware::class,
        ]);

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
