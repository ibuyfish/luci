<?php
namespace Modules\Blog\Http\Repositories;

use Modules\Blog\Entities\Blog;

class BlogRepository {
    public function search($search){
        return Blog::whereRelation('translations', 'name', 'LIKE' , '%'. $search . '%')->with('translations')->paginate(10);
    }
    public function all(){
        return Blog::orderBy('updated_at','desc')->where('status','!=',0)->get();
    }
    public function paginate($limit){
        return Blog::orderBy('updated_at','DESC')->with('translations','category')->paginate($limit);
    }
    public function activePaginate($limit){
        return Blog::orderBy('updated_at','DESC')->where('status','!=',0)->with('translations','category')->paginate($limit);
    }
    public function findById($id){
        return Blog::find($id)->load('translations','category');
    }
    public function delete($models){
        return $models->delete();
    }
}