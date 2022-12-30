<?php

namespace Modules\App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AppController extends Controller
{
    public function index()
    {
        return view('app::index');
    }
    public function showDashboard()
    {
        return view('app::dashboard.index');
    }
    public function localeEn()
    {
        session()->put('locale','en');
        return redirect()->back();
    }
    public function localeVi()
    {
        session()->put('locale','vi');
        return redirect()->back();
    }
}
