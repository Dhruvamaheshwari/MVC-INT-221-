<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

use App\http\Middleware\GlobalIsMiddleware; // import heare

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {

        // registering middlewatre here

        // this is the normal middleware
        /*
        $middleware->alias([
            'checkingage' => App\Http\Middleware\MiddlewareIs::class,
        ]);
         */


        // globle middleware to apply all project
        //$middleware -> append(GlobalIsMiddleware::class);
        
        // this is the Construct middleware`
        /*
            $middleware->alias([
                'ageFactor' => App\Http\Middleware\ConstructMiddleware::class
            ]);
         */

    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
