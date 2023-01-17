<?php

namespace Modules\Contact\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactHomeController extends Controller
{
    public function detail(){
        return view('contact::home.index');
    }
}
