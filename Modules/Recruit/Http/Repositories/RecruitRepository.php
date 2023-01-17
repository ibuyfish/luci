<?php
namespace Modules\Recruit\Http\Repositories;

use Modules\Recruit\Entities\Recruit;

class RecruitRepository {
    public function search($search){
        return Recruit::whereRelation('translations', 'name', 'LIKE' , '%'. $search . '%')->with('translations')->paginate(10);
    }
    public function all(){
        return Recruit::orderBy('updated_at','desc')->where('status','!=',0)->get();
    }
    public function paginate($limit){
        return Recruit::orderBy('updated_at','DESC')->with('translations')->paginate($limit);
    }
    public function findById($id){
        return Recruit::find($id)->load('translations');
    }
    public function delete($models){
        return $models->delete();
    }
}