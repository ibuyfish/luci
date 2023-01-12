<?php

namespace Modules\Banner\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Banner\Http\Hooks\BannerHook;

class BannerController extends Controller
{
    private $bannerHook;
    public function __construct(BannerHook $bannerHook)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->bannerHook = $bannerHook;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->bannerHook->get_search_data($search);
        }else { 
            $models = $this->bannerHook->get_pagination_data(10);
        }
        return view('banner::banner.list',compact('models'));
    }
    public function create()
    {
        return view('banner::banner.create');
    }
    public function store(Request $request){
        $datas = $this->bannerHook->validate_incoming_request($request);
        $this->bannerHook->create_data_and_translation($datas);
        return redirect(route('admin.banner.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $model = $this->bannerHook->get_edit_data($id);
        return view('banner::banner.edit',compact('model'));
    }
    public function update(Request $request,$id){
        $datas = $this->bannerHook->validate_incoming_request($request);
        $this->bannerHook->update_data_and_translation($datas,$id);
        return redirect(route('admin.banner.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->bannerHook->get_edit_data($id);
        $this->bannerHook->delete_selected_data_translation($id);
        $this->bannerHook->delete_selected_data($model);
        return redirect(route('admin.banner.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->bannerHook->get_edit_data($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->bannerHook->get_edit_data($id);
        $this->bannerHook->change_status_and_update($model);
    }
}
