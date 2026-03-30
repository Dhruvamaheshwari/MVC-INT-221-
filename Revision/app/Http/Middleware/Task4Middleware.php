<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Task4Middleware
{

    public function handle(Request $request, Closure $next): Response
    {
        $name = $request -> query('name');
        $country = $request -> query('country');
        if(!$country || $country != "india" || !$name || $name != "dhruva")
            {
                return response("you are not valid or you are not this county");
            }
        return $next($request);
    }
}
