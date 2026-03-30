<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ConstructMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        $age = $request -> query('age');
        if(!$age || $age < 18)
            {
               return response("you are not allowed to see the message");
            }
        return $next($request);
    }
}
