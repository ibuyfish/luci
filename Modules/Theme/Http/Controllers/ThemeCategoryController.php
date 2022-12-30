<?php

namespace Modules\Theme\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Theme\Entities\ThemeCategory;
use Modules\Theme\Entities\ThemeCategoryTranslation;
use Modules\Theme\Repositories\Interface\ThemeCategoryInterface;

class ThemeCategoryController extends Controller
{
    private $themeCategoryEloquent;
    public function __construct(ThemeCategoryInterface $themeCategoryEloquent)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->themeCategoryEloquent = $themeCategoryEloquent;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->themeCategoryEloquent->search($search);
        }else { 
            $models = $this->themeCategoryEloquent->getPaginateWithRelation(10);
        }
        return view('theme::category.list',compact('models'));
    }
    public function create()
    {
        $categories = $this->themeCategoryEloquent->getAllActiveParentWithRelation();
        return view('theme::category.create',compact('categories'));
    }
    public function store(Request $request){
        $datas = $request->validate([
            'name'=> 'required',
            'subname'=>'required',
            'description'=>'required',
            'parent_id'=>'nullable',
            'thumbnail'=>'nullable',
            'status'=>'nullable',
            'seo_title'=>'nullable',
            'seo_description'=>'nullable',
            'seo_keyword'=>'nullable',
            'seo_canonical'=>'nullable',
        ]);
        $models = new ThemeCategory();
        $models->thumbnail = $datas['thumbnail'];
        $models->parent_id = $datas['parent_id'];
        $models->status = $datas['status'];
        $models->seo_title = $datas['seo_title'];
        $models->seo_description = $datas['seo_description'];
        $models->seo_keyword = $datas['seo_keyword'];
        $models->seo_canonical = $datas['seo_canonical'];
        $models->save();
        
        $trans = new ThemeCategoryTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $trans->subname = $datas['subname'];
        $trans->description = $datas['description'];
        $models->translations()->save($trans);
        return redirect(route('admin.theme_category.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $model = $this->themeCategoryEloquent->findById($id);
        $categories = $this->themeCategoryEloquent->getAllActiveParentWithRelation();
        return view('theme::category.edit',compact('model','categories'));
    }
    public function update(Request $request,$id){
        $datas = $request->validate([
            'name'=> 'required',
            'subname'=>'required',
            'description'=>'required',
            'parent_id'=>'nullable',
            'thumbnail'=>'nullable',
            'status'=>'nullable',
            'seo_title'=>'nullable',
            'seo_description'=>'nullable',
            'seo_keyword'=>'nullable',
            'seo_canonical'=>'nullable',
        ]);

        $models = $this->themeCategoryEloquent->findById($id);
        $models->thumbnail = $datas['thumbnail'];
        $models->parent_id = $datas['parent_id'];
        $models->status = $datas['status'];
        $models->seo_title = $datas['seo_title'];
        $models->seo_description = $datas['seo_description'];
        $models->seo_keyword = $datas['seo_keyword'];
        $models->seo_canonical = $datas['seo_canonical'];
        $models->save();

        $trans = ThemeCategoryTranslation::where('language','=',session('locale'))->where('theme_category_id','=',$id)->first();
        if($trans == null){
        $trans = new ThemeCategoryTranslation();
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

        return redirect(route('admin.theme_category.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->themeCategoryEloquent->findById($id);
        $trans = ThemeCategoryTranslation::where('theme_category_id','=',$id)->get();
        foreach($trans as $tran){
            $tran->delete();
        }
        $this->themeCategoryEloquent->delete($model);
        return redirect(route('admin.theme_category.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->themeCategoryEloquent->findById($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->themeCategoryEloquent->findById($id);
        if($model->status == 0){
            $model->status = 1;
        } else {
            $model->status = 0;
        }
        $model->save();
    }
}
