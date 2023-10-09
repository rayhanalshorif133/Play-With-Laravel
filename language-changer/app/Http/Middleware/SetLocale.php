<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        
        if(Session::has('lang')){
            app()->setLocale(Session::get('lang'));
        }
 
        return $next($request);
    }
}
