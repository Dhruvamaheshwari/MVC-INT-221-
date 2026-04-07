<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Task7Middleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $code = $request -> query('code');
        if($code != 'dhruva')
            {
                return response('you are not allowed in the Dhruva Maheshwai vila');
            }
        return $next($request);
    }
}
