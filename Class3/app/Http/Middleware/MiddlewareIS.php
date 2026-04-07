<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MiddlewareIS
{

    public function handle(Request $request, Closure $next): Response
    {
        $age = $request -> query('age');
        if(!$age || $age < 18)
            {
                return response("sorry, you are not allowed");
            }
            
        return $next($request);
    }
}
