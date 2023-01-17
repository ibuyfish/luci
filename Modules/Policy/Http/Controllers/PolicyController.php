<?php

namespace Modules\Policy\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Policy\Http\Hooks\PolicyHook;

class PolicyController extends Controller
{
    private $policyHook;
    public function __construct(PolicyHook $policyHook)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->policyHook = $policyHook;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->policyHook->get_search_data($search);
        }else { 
            $models = $this->policyHook->get_pagination_data(10);
        }
        return view('policy::policy.list',compact('models'));
    }
    public function create()
    {
        return view('policy::policy.create');
    }
    public function store(Request $request){
        $datas = $this->policyHook->validate_incoming_request($request);
        $this->policyHook->create_data_and_translation($datas);
        return redirect(route('admin.policy.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $model = $this->policyHook->get_edit_data($id);
        return view('policy::policy.edit',compact('model'));
    }
    public function update(Request $request,$id){
        $datas = $this->policyHook->validate_incoming_request($request);
        $this->policyHook->update_data_and_translation($datas,$id);
        return redirect(route('admin.policy.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->policyHook->get_edit_data($id);
        $this->policyHook->delete_selected_data_translation($id);
        $this->policyHook->delete_selected_data($model);
        return redirect(route('admin.policy.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->policyHook->get_edit_data($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->policyHook->get_edit_data($id);
        $this->policyHook->change_status_and_update($model);
    }
}