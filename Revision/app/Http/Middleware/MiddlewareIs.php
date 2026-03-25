<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MiddlewareIS  
{

    public function handle(Request $request, Closure $next): Response
    {
        $age = $request->query('age');
        $role = $request -> query('role');
        if(!$age || $age < 18)
            {
                return response("Opps Sorry you are not valid");
            }
            
        if($role != "admin")
            {
                return response("you are not admin");
            }

        return $next($request);
    }
}
