<?php

namespace Modules\Recruit\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RecruitHomeController extends Controller
{
    public function detail(){
        return view('recruit::home.index');
    }
}
