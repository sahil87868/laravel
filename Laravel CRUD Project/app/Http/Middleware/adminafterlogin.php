<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class adminafterlogin
{
    // /**
    //  * Handle an incoming request.
    //  *
    //  * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
    //  */
    public function handle(Request $request, Closure $next): Response
    {
        // if(session()->get('userid'))
        // {
            
        // }
        // else
        // {
        //     return redirect('/adminlogin');
        // }
        return $next($request);
    }
}
