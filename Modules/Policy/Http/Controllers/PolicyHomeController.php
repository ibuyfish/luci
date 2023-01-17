<?php

namespace Modules\Policy\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Policy\Http\Hooks\PolicyHook;

class PolicyHomeController extends Controller
{
    private $policyHook;
   public function __construct(PolicyHook $policyHook)
   {
        $this->policyHook = $policyHook;
   }
   public function detail($id){
        $model = $this->policyHook->get_edit_data($id);
        return view('policy::home.detail',compact('model'));
   }
}
