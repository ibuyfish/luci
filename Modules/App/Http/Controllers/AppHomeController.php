<?php

namespace Modules\App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AppHomeController extends Controller
{
    public function index()
    {
        return view('app::home.index');
    }
}
