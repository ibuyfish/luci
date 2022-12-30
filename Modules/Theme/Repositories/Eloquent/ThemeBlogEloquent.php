<?php

namespace Modules\Theme\Repositories\Eloquent;

use Modules\Theme\Entities\ThemeBlog;
use Modules\Theme\Repositories\Interface\ThemeBlogInterface;

class ThemeBlogEloquent implements ThemeBlogInterface 
{
    public function search($value){
        return ThemeBlog::whereRelation('translations', 'name', 'LIKE' , '%'. $value . '%')->with('translations')->paginate(10);
    }
    public function getPaginateWithRelation($limit){
        return ThemeBlog::orderBy('updated_at','DESC')->with('translations')->paginate($limit);
    }
    public function getAll(){
        return ThemeBlog::orderBy('updated_at','DESC')->get();
    }
    public function getPaginate($limit){
        return ThemeBlog::orderBy('updated_at','DESC')->with('translations')->paginate($limit);
    }
    public function massCreate($models){
        return ThemeBlog::create($models);
    }
    public function massUpdate($id,$models){
        return ThemeBlog::find($id)->update($models);
    }
    public function save($models){
        return $models->save();
    }
    public function findById($id){
        return ThemeBlog::find($id)->load('translations');
    }
    public function delete($models){
        return $models->delete();
    }
    //
}
