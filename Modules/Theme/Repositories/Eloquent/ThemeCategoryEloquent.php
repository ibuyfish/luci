<?php

namespace Modules\Theme\Repositories\Eloquent;

use Modules\Theme\Entities\ThemeCategory;
use Modules\Theme\Repositories\Interface\ThemeCategoryInterface;

class ThemeCategoryEloquent implements ThemeCategoryInterface 
{
    public function getAllActiveChildWithRelation(){
        return ThemeCategory::orderBy('updated_at','DESC')->where('status','!=',0)->where('parent_id','!=',null)->with('translations','childs.translations','parent.translations')->get();
    }
    public function getAllActiveParentWithRelation(){
        return ThemeCategory::orderBy('updated_at','DESC')->where('status','!=',0)->where('parent_id','=',null)->with('translations','childs.translations','parent.translations')->get();
    }
    public function search($value){
        return ThemeCategory::whereRelation('translations', 'name', 'LIKE' , '%'. $value . '%')->with('translations')->paginate(10);
    }
    public function getPaginateWithRelation($limit){
        return ThemeCategory::orderBy('updated_at','DESC')->with('translations','parent.translations','childs')->paginate($limit);
    }
    public function getAll(){
        return ThemeCategory::orderBy('updated_at','DESC')->get();
    }
    public function getPaginate($limit){
        return ThemeCategory::orderBy('updated_at','DESC')->with('translations')->paginate($limit);
    }
    public function massCreate($models){
        return ThemeCategory::create($models);
    }
    public function massUpdate($id,$models){
        return ThemeCategory::find($id)->update($models);
    }
    public function save($models){
        return $models->save();
    }
    public function findById($id){
        return ThemeCategory::find($id)->load('translations','products.translations','childs.translations');
    }
    public function delete($models){
        return $models->delete();
    }
    //
}
