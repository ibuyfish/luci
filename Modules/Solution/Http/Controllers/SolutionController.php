<?php

namespace Modules\Solution\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Solution\Http\Hooks\SolutionHook;

class SolutionController extends Controller
{
    private $solutionHook;
    public function __construct(SolutionHook $solutionHook)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->solutionHook = $solutionHook;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->solutionHook->get_search_data($search);
        }else { 
            $models = $this->solutionHook->get_pagination_data(10);
        }
        return view('solution::solution.list',compact('models'));
    }
    public function create()
    {
        return view('solution::solution.create');
    }
    public function store(Request $request){
        $datas = $this->solutionHook->validate_incoming_request($request);
        $this->solutionHook->create_data_and_translation($datas);
        return redirect(route('admin.solution.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $model = $this->solutionHook->get_edit_data($id);
        return view('solution::solution.edit',compact('model'));
    }
    public function update(Request $request,$id){
        $datas = $this->solutionHook->validate_incoming_request($request);
        $this->solutionHook->update_data_and_translation($datas,$id);
        return redirect(route('admin.solution.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->solutionHook->get_edit_data($id);
        $this->solutionHook->delete_selected_data_translation($id);
        $this->solutionHook->delete_selected_data($model);
        return redirect(route('admin.solution.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->solutionHook->get_edit_data($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->solutionHook->get_edit_data($id);
        $this->solutionHook->change_status_and_update($model);
    }
}
