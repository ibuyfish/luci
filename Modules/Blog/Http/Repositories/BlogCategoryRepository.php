<?php
namespace Modules\Blog\Http\Repositories;

use Modules\Blog\Entities\BlogCategory;

class BlogCategoryRepository {
    public function search($search){
        return BlogCategory::whereRelation('translations', 'name', 'LIKE' , '%'. $search . '%')->with('translations')->paginate(10);
    }
    public function all(){
        return BlogCategory::orderBy('updated_at','desc')->where('status','!=',0)->get();
    }
    public function paginate($limit){
        return BlogCategory::orderBy('updated_at','DESC')->with('translations')->paginate($limit);
    }
    public function findById($id){
        return BlogCategory::find($id)->load('translations');
    }
    public function delete($models){
        return $models->delete();
    }
}