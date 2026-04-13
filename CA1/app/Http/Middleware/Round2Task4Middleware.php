<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Round2Task4Middleware
{
    public function handle(Request $request, Closure $next): Response
    {

    // yeha se hum url se value lete h 127.0.0.1:8000/hey?name=dhruva&country=indi
    $name = request()->query('name');
    $country = request()->query('country');

        // if(request()->name == "dhruva" and request()->country == 'india') // or isme eese 127.0.0.1:8000/heydhruva/indi
        if($name == 'dhruva' and $country == 'india')
            return $next($request);
        else
            return response('you are not allowed');
    }
}
