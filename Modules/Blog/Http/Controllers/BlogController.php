<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Hooks\BlogHook;
use Modules\Blog\Http\Repositories\BlogCategoryRepository;
use Modules\Blog\Entities\Blog;

class BlogController extends Controller
{
    private $blogHook;
    private $blogCategoryRepository;
    public function __construct(BlogHook $blogHook,BlogCategoryRepository $blogCategoryRepository)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->blogHook = $blogHook;
        $this->blogCategoryRepository = $blogCategoryRepository;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->blogHook->get_search_data($search);
        }else { 
            $models = $this->blogHook->get_pagination_data(10);
        }
        return view('blog::blog.list',compact('models'));
    }
    public function create()
    {
        $blog_categories = $this->blogCategoryRepository->all();
        return view('blog::blog.create',compact('blog_categories'));
    }
    public function store(Request $request){
        $datas = $this->blogHook->validate_incoming_request($request);
        $this->blogHook->create_data_and_translation($datas);
        return redirect(route('admin.blog.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $blog_categories = $this->blogCategoryRepository->all();
        $model = $this->blogHook->get_edit_data($id);
        return view('blog::blog.edit',compact('model','blog_categories'));
    }
    public function update(Request $request,$id){
        $datas = $this->blogHook->validate_incoming_request($request);
        $this->blogHook->update_data_and_translation($datas,$id);
        return redirect(route('admin.blog.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->blogHook->get_edit_data($id);
        $this->blogHook->delete_selected_data_translation($id);
        $this->blogHook->delete_selected_data($model);
        return redirect(route('admin.blog.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->blogHook->get_edit_data($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->blogHook->get_edit_data($id);
        $this->blogHook->change_status_and_update($model);
    }
}