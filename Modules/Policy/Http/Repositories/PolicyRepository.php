<?php
namespace Modules\Policy\Http\Repositories;

use Modules\Policy\Entities\Policy;

class PolicyRepository {
    public function search($search){
        return Policy::whereRelation('translations', 'name', 'LIKE' , '%'. $search . '%')->with('translations')->paginate(10);
    }
    public function all(){
        return Policy::orderBy('updated_at','desc')->where('status','!=',0)->get();
    }
    public function paginate($limit){
        return Policy::orderBy('updated_at','DESC')->with('translations')->paginate($limit);
    }
    public function findById($id){
        return Policy::find($id)->load('translations');
    }
    public function delete($models){
        return $models->delete();
    }
}