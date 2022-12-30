<?php

namespace Modules\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Locale
{
    public function handle(Request $request, Closure $next)
    {
        if(session()->has('locale')) {
            app()->setLocale(session('locale'));
        } else {
            session()->put('locale','vi');
        }
        return $next($request);
    }
}
