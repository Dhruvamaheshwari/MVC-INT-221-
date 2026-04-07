<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Task6Middleware
{

    public function handle(Request $request, Closure $next): Response
    {
        $name = $request -> query('name');
        if($name != 'dark')
            {
                return response("you are not allowed.");
            }
        return $next($request);
    }
}
