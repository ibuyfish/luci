<?php

namespace Modules\Auth\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Dashboard
{
    public function handle(Request $request, Closure $next)
    {   
        if(Auth::guard('users')->check() && Auth::user() != null){
            if(Auth::user()->role == 'god' || Auth::user()->role == 'king'){
                return $next($request);
            }
        }   
        return redirect(route('admin.login'));
    }
}
