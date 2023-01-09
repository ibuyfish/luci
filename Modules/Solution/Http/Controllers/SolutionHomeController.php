<?php

namespace Modules\Solution\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SolutionHomeController extends Controller{
    public function detail(){
        return view('solution::home.detail.index');
    }
}