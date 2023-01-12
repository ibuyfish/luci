<?php

namespace Modules\Banner\Http\Repositories;
use Modules\Banner\Entities\Banner;
interface BannerInterface{
    public function search($search);
    public function paginate($limit);
    public function findById($id);
    public function delete($models);
    public function all();
}
class BannerRepository implements BannerInterface
{
    public function search($search){
        return Banner::whereRelation('translations', 'name', 'LIKE' , '%'. $search . '%')->with('translations')->paginate(10);
    }
    public function all(){
        return Banner::orderBy('updated_at','DESC')->with('translations')->get();
    }
    public function paginate($limit){
        return Banner::orderBy('updated_at','DESC')->with('translations')->paginate($limit);
    }
    public function findById($id){
        return Banner::find($id)->load('translations');
    }
    public function delete($models){
        return $models->delete();
    }
}
