<?php

namespace Modules\Service\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ServiceHomeController extends Controller
{
    public function detail()
    {
        return view('service::home.detail.index');
    }
}
