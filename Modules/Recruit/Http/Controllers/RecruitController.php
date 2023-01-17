<?php

namespace Modules\Recruit\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Recruit\Http\Hooks\RecruitHook;

class RecruitController extends Controller
{
    private $recruitHook;
    public function __construct(RecruitHook $recruitHook)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->recruitHook = $recruitHook;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->recruitHook->get_search_data($search);
        }else { 
            $models = $this->recruitHook->get_pagination_data(10);
        }
        return view('recruit::recruit.list',compact('models'));
    }
    public function create()
    {
        return view('recruit::recruit.create');
    }
    public function store(Request $request){
        $datas = $this->recruitHook->validate_incoming_request($request);
        $this->recruitHook->create_data_and_translation($datas);
        return redirect(route('admin.recruit.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $model = $this->recruitHook->get_edit_data($id);
        return view('recruit::recruit.edit',compact('model'));
    }
    public function update(Request $request,$id){
        $datas = $this->recruitHook->validate_incoming_request($request);
        $this->recruitHook->update_data_and_translation($datas,$id);
        return redirect(route('admin.recruit.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->recruitHook->get_edit_data($id);
        $this->recruitHook->delete_selected_data_translation($id);
        $this->recruitHook->delete_selected_data($model);
        return redirect(route('admin.recruit.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->recruitHook->get_edit_data($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->recruitHook->get_edit_data($id);
        $this->recruitHook->change_status_and_update($model);
    }
}