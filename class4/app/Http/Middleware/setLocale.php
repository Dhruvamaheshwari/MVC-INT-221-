<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

// ye import krna h ;
use Illuminate\Support\Facades\App;

use Symfony\Component\HttpFoundation\Response;

class setLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('locale')) { // it check whether lang is stored in 
            App::setLocale(session('locale'));
        }
        return $next($request);
    }
}
    