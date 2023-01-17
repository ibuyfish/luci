<?php
namespace Modules\Recruit\Http\Repositories;

use Modules\Recruit\Entities\RecruitApplicant;

class RecruitApplicantRepository {
    public function search($search){
        return RecruitApplicant::whereRelation('translations', 'name', 'LIKE' , '%'. $search . '%')->paginate(10);
    }
    public function all(){
        return RecruitApplicant::orderBy('updated_at','desc')->where('status','!=',0)->get();
    }
    public function paginate($limit){
        return RecruitApplicant::orderBy('updated_at','DESC')->paginate($limit);
    }
    public function findById($id){
        return RecruitApplicant::find($id);
    }
    public function delete($models){
        return $models->delete();
    }
}