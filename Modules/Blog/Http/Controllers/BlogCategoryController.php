<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Hooks\BlogCategoryHook;

class BlogCategoryController extends Controller
{
    private $blogCategoryHook;
    public function __construct(BlogCategoryHook $blogCategoryHook)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->blogCategoryHook = $blogCategoryHook;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->blogCategoryHook->get_search_data($search);
        }else { 
            $models = $this->blogCategoryHook->get_pagination_data(10);
        }
        return view('blog::blog_category.list',compact('models'));
    }
    public function create()
    {
        return view('blog::blog_category.create');
    }
    public function store(Request $request){
        $datas = $this->blogCategoryHook->validate_incoming_request($request);
        $this->blogCategoryHook->create_data_and_translation($datas);
        return redirect(route('admin.blog_category.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $model = $this->blogCategoryHook->get_edit_data($id);
        return view('blog::blog_category.edit',compact('model'));
    }
    public function update(Request $request,$id){
        $datas = $this->blogCategoryHook->validate_incoming_request($request);
        $this->blogCategoryHook->update_data_and_translation($datas,$id);
        return redirect(route('admin.blog_category.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->blogCategoryHook->get_edit_data($id);
        $this->blogCategoryHook->delete_selected_data_translation($id);
        $this->blogCategoryHook->delete_selected_data($model);
        return redirect(route('admin.blog_category.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->blogCategoryHook->get_edit_data($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->blogCategoryHook->get_edit_data($id);
        $this->blogCategoryHook->change_status_and_update($model);
    }
}