<?php

namespace Modules\Theme\Repositories\Eloquent;

use Modules\Theme\Entities\ThemeProduct;
use Modules\Theme\Repositories\Interface\ThemeProductInterface;

class ThemeProductEloquent implements ThemeProductInterface 
{
    public function getHotWithRelation($limit){
        return ThemeProduct::orderBy('updated_at','DESC')->where('status','!=',0)->where('label','=','hot')->with('translations')->get();
    }
    public function search($value){
        return ThemeProduct::whereRelation('translations', 'name', 'LIKE' , '%'. $value . '%')->with('translations')->paginate(10);
    }
    public function getPaginateWithRelation($limit){
        return ThemeProduct::orderBy('updated_at','DESC')->with('translations','category.translations','category.translations')->paginate($limit);
    }
    public function getAllWithRelation(){
        return ThemeProduct::orderBy('updated_at','DESC')->with('translations','category.translations','category.translations')->get();
    }
    public function getSort(){
        return ThemeProduct::where('status','!=',0)->with('translations','category.translations','category.translations');
    }
    public function getPaginate($limit){
        return ThemeProduct::orderBy('updated_at','DESC')->with('translations')->paginate($limit);
    }
    public function massCreate($models){
        return ThemeProduct::create($models);
    }
    public function massUpdate($id,$models){
        return ThemeProduct::find($id)->update($models);
    }
    public function save($models){
        return $models->save();
    }
    public function findById($id){
        return ThemeProduct::find($id)->load('translations','category.translations','category.products.translations','images');
    }
    public function delete($models){
        return $models->delete();
    }
    //
}
