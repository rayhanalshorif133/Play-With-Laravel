<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Language
{
    public function handle($request, Closure $next)
    {
        if (session()->has('applocale') && array_key_exists(session()->get('applocale'), config('languages'))) {
            App::setLocale(session()->get('applocale'));
        }
        return $next($request);
    }
}
