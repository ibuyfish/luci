<?php

namespace Modules\Theme\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Theme\Entities\ThemeBlog;
use Modules\Theme\Entities\ThemeBlogTranslation;
use Modules\Theme\Repositories\Interface\ThemeBlogInterface;

class ThemeBlogController extends Controller
{
    private $themeBlogEloquent;
    public function __construct(ThemeBlogInterface $themeBlogEloquent)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->themeBlogEloquent = $themeBlogEloquent;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->themeBlogEloquent->search($search);
        }else { 
            $models = $this->themeBlogEloquent->getPaginateWithRelation(10);
        }
        return view('theme::blog.list',compact('models'));
    }
    public function create()
    {
        return view('theme::blog.create');
    }
    public function store(Request $request){
        $datas = $request->validate([
            'name'=> 'required',
            'subname'=>'required',
            'description'=>'required',
            'thumbnail'=>'nullable',
            'status'=>'nullable',
            'seo_title'=>'nullable',
            'seo_description'=>'nullable',
            'seo_keyword'=>'nullable',
            'seo_canonical'=>'nullable',
        ]);
        $models = new ThemeBlog();
        $models->thumbnail = $datas['thumbnail'];
        $models->status = $datas['status'];
        $models->seo_title = $datas['seo_title'];
        $models->seo_description = $datas['seo_description'];
        $models->seo_keyword = $datas['seo_keyword'];
        $models->seo_canonical = $datas['seo_canonical'];
        $models->save();     
        $trans = new ThemeBlogTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $trans->subname = $datas['subname'];
        $trans->description = $datas['description'];
        $models->translations()->save($trans);
        return redirect(route('admin.theme_blog.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $model = $this->themeBlogEloquent->findById($id);
        return view('theme::blog.edit',compact('model'));
    }
    public function update(Request $request,$id){
        $datas = $request->validate([
            'name'=> 'required',
            'subname'=>'required',
            'description'=>'required',
           
            'thumbnail'=>'nullable',
            'status'=>'nullable',
            'seo_title'=>'nullable',
            'seo_description'=>'nullable',
            'seo_keyword'=>'nullable',
            'seo_canonical'=>'nullable',
        ]);
        $models = $this->themeBlogEloquent->findById($id);
        $models->thumbnail = $datas['thumbnail'];
        $models->status = $datas['status'];
        $models->seo_title = $datas['seo_title'];
        $models->seo_description = $datas['seo_description'];
        $models->seo_keyword = $datas['seo_keyword'];
        $models->seo_canonical = $datas['seo_canonical'];
        $models->save();
        $trans = ThemeBlogTranslation::where('language','=',session('locale'))->where('theme_blog_id','=',$id)->first();
        if($trans == null){
        $trans = new ThemeBlogTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $trans->subname = $datas['subname'];
        $trans->description = $datas['description'];
        $models->translations()->save($trans);
        } else {
            $trans->name = $datas['name'];
            $trans->language = session('locale');
            $trans->subname = $datas['subname'];
            $trans->description = $datas['description'];
            $trans->save();
        }

        return redirect(route('admin.theme_blog.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->themeBlogEloquent->findById($id);
        $trans = ThemeBlogTranslation::where('theme_blog_id','=',$id)->get();
        foreach($trans as $tran){
            $tran->delete();
        }
        $this->themeBlogEloquent->delete($model);
        return redirect(route('admin.theme_blog.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->themeBlogEloquent->findById($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->themeBlogEloquent->findById($id);
        if($model->status == 0){
            $model->status = 1;
        } else {
            $model->status = 0;
        }
        $model->save();
    }
}
