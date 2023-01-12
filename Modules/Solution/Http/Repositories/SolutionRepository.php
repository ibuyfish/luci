<?php

namespace Modules\Solution\Http\Repositories;
use Modules\Solution\Entities\Solution;

interface SolutionInterface{
    public function search($search);
    public function paginate($limit);
    public function findById($id);
    public function delete($models);
    public function all();
    public function getActive();
}
class SolutionRepository implements SolutionInterface
{
    public function search($search){
        return Solution::whereRelation('translations', 'name', 'LIKE' , '%'. $search . '%')->with('translations')->paginate(10);
    }
    public function all(){
        return Solution::orderBy('updated_at','DESC')->with('translations')->get();
    }
    public function getActive(){
        return Solution::orderBy('updated_at','DESC')->where('status','!=',0)->with('translations')->get();
    }
    public function paginate($limit){
        return Solution::orderBy('updated_at','DESC')->with('translations')->paginate($limit);
    }
    public function findById($id){
        return Solution::find($id)->load('translations');
    }
    public function delete($models){
        return $models->delete();
    }
}
