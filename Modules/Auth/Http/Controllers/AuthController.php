<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{   
    public function showLogin(){
        if(Auth::check()){
            return redirect(route('admin.dashboard.show'));
        }
;        return view('auth::login.index');
    }
    public function login(Request $request)
    {   
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('users')->attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect(route('admin.dashboard.show'));
        }
        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
