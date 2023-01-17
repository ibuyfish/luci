<?php

namespace Modules\Recruit\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Recruit\Http\Hooks\RecruitApplicantHook;

class RecruitApplicantController extends Controller
{
    private $recruitApplicantHook;
    public function __construct(RecruitApplicantHook $recruitApplicantHook)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->recruitApplicantHook = $recruitApplicantHook;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->recruitApplicantHook->get_search_data($search);
        }else { 
            $models = $this->recruitApplicantHook->get_pagination_data(10);
        }
        return view('recruit::recruit_applicant.list',compact('models'));
    }
    public function create()
    {
        return view('recruit::recruit_applicant.create');
    }
    public function store(Request $request){
        $datas = $this->recruitApplicantHook->validate_incoming_request($request);
        $this->recruitApplicantHook->create_data_and_translation($datas);
        return redirect(route('admin.recruit_applicant.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $model = $this->recruitApplicantHook->get_edit_data($id);
        return view('recruit::recruit_applicant.edit',compact('model'));
    }
    public function update(Request $request,$id){
        $datas = $this->recruitApplicantHook->validate_incoming_request($request);
        $this->recruitApplicantHook->update_data_and_translation($datas,$id);
        return redirect(route('admin.recruit_applicant.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->recruitApplicantHook->get_edit_data($id);
        $this->recruitApplicantHook->delete_selected_data($model);
        return redirect(route('admin.recruit_applicant.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->recruitApplicantHook->get_edit_data($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->recruitApplicantHook->get_edit_data($id);
        $this->recruitApplicantHook->change_status_and_update($model);
    }
}