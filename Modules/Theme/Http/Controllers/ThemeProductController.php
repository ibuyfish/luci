<?php

namespace Modules\Theme\Http\Controllers;

use CKSource\CKFinder\Image;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Theme\Repositories\Interface\ThemeCategoryInterface;
use Modules\Theme\Entities\ThemeProduct;
use Modules\Theme\Entities\ThemeProductImage;
use Modules\Theme\Entities\ThemeProductTranslation;
use Modules\Theme\Repositories\Interface\ThemeProductInterface;

class ThemeProductController extends Controller
{
    private $themeProductEloquent;
    private $themeCategoryEloquent;
    public function __construct(ThemeCategoryInterface $themeCategoryEloquent,ThemeProductInterface $themeProductEloquent)
    {
        $this->middleware('dashboard');
        $this->middleware('locale');
        $this->themeProductEloquent = $themeProductEloquent;
        $this->themeCategoryEloquent = $themeCategoryEloquent;
    }
    public function list(Request $request)
    {
        $search = $request->search;
        if($search){
            $models = $this->themeProductEloquent->search($search);
        }else { 
            $models = $this->themeProductEloquent->getPaginateWithRelation(10);
        }
        return view('theme::product.list',compact('models'));
    }
    public function create()
    {
        $categories = $this->themeCategoryEloquent->getAllActiveChildWithRelation();
        return view('theme::product.create',compact('categories'));
    }
    public function store(Request $request){

        $datas = $request->validate([
            'name'=> 'required',
            'subname'=>'required',
            'price'=>'required',
            'off'=>'required',
            'label'=>'required',
            'sale_price'=>'required',
            'color'=>'nullable',
            'images'=>'required',
            'size'=>'nullable',
            'description'=>'required',
            'theme_category_id'=>'required',
            'thumbnail'=>'nullable',
            'status'=>'nullable',
            'seo_title'=>'nullable',
            'seo_description'=>'nullable',
            'seo_keyword'=>'nullable',
            'seo_canonical'=>'nullable',
        ]);

        $models = new ThemeProduct();
        $models->thumbnail = $datas['thumbnail'];
        $models->label = $datas['label'];
        $models->theme_category_id = $datas['theme_category_id'];
        $models->status = $datas['status'];
        $models->price = $datas['price'];
        $models->off = $datas['off'];
        $models->sale_price = $datas['sale_price'];
        $models->color = json_encode($datas['color']);
        $models->size = json_encode($datas['size']);
        $models->seo_title = $datas['seo_title'];
        $models->seo_description = $datas['seo_description'];
        $models->seo_keyword = $datas['seo_keyword'];
        $models->seo_canonical = $datas['seo_canonical'];
        $models->save();

        foreach($datas['images'] as $image){
            $images = new ThemeProductImage();
            $images->image = $image;
            $models->images()->save($images);
        }
        
        $trans = new ThemeProductTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $trans->subname = $datas['subname'];
        $trans->description = $datas['description'];
        $models->translations()->save($trans);
        return redirect(route('admin.theme_product.list'))->with('message','Created Success');
    }
    public function edit($id)
    {   
        $model = $this->themeProductEloquent->findById($id);
        $categories = $this->themeCategoryEloquent->getAllActiveChildWithRelation();
        return view('theme::product.edit',compact('model','categories'));
    }
    public function update(Request $request,$id){
        $datas = $request->validate([
            'name'=> 'required',
            'subname'=>'required',
            'label'=>'required',
            'description'=>'required',
            'price'=>'required',
            'off'=>'required',
            'sale_price'=>'required',
            'color'=>'nullable',
            'images'=>'required',
            'size'=>'nullable',
            'theme_category_id'=>'required',
            'thumbnail'=>'nullable',
            'status'=>'nullable',
            'seo_title'=>'nullable',
            'seo_description'=>'nullable',
            'seo_keyword'=>'nullable',
            'seo_canonical'=>'nullable',
        ]);

        $models = $this->themeProductEloquent->findById($id);
        $models->thumbnail = $datas['thumbnail'];
        $models->theme_category_id = $datas['theme_category_id'];
        $models->label = $datas['label'];
        $models->status = $datas['status'];
        $models->price = $datas['price'];
        $models->off = $datas['off'];
        $models->sale_price = $datas['sale_price'];
        $models->color = json_encode($datas['color']);
        $models->size = json_encode($datas['size']);
        $models->seo_title = $datas['seo_title'];
        $models->seo_description = $datas['seo_description'];
        $models->seo_keyword = $datas['seo_keyword'];
        $models->seo_canonical = $datas['seo_canonical'];
        $models->save();

        $trans = ThemeProductTranslation::where('language','=',session('locale'))->where('theme_product_id','=',$id)->first();
        if($trans == null){
        $trans = new ThemeProductTranslation();
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

        $old_images = ThemeProductImage::where('theme_product_id','=',$id)->get();
        foreach($old_images as $old_image){
            $old_image->delete();
        }
        foreach($datas['images'] as $image){
            $images = new ThemeProductImage();
            $images->image = $image ;
            $models->images()->save($images);
        }

        return redirect(route('admin.theme_product.list'))->with('message','Updated Success');
    }
    public function delete(Request $request){
        $id = $request->id;
        $model = $this->themeProductEloquent->findById($id);
        $trans = ThemeProductTranslation::where('theme_product_id','=',$id)->get();
        foreach($trans as $tran){
            $tran->delete();
        }
        $this->themeProductEloquent->delete($model);
        return redirect(route('admin.theme_product.list'))->with('message','Deleted Success');
    }
    public function setTop(Request $request){
        $id = $request->id;
        $model = $this->themeProductEloquent->findById($id);
        $model->touch();
    }
    public function toggleShow(Request $request){
        $id = $request->id;
        $model = $this->themeProductEloquent->findById($id);
        if($model->status == 0){
            $model->status = 1;
        } else {
            $model->status = 0;
        }
        $model->save();
    }
}
