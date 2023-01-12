<?php 
namespace Modules\Banner\Http\Hooks;
use Modules\Banner\Http\Repositories\BannerRepository;
use Modules\Banner\Entities\Banner;
use Modules\Banner\Entities\BannerTranslation;

class BannerHook {
    private $bannerRepository;
    public function __construct(BannerRepository $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }
    public function get_search_data(string $search){
        return $this->bannerRepository->search($search);
    }
    public function get_pagination_data(int $limit){
        return $this->bannerRepository->paginate($limit);
    }
    public function get_edit_data(int $id){
        return $this->bannerRepository->findById($id);
    }
    public function validate_incoming_request($request){
        return $request->validate([
            'name'=> 'required',
            'subname'=>'required',
            'description'=>'required',
            'thumbnail'=>'nullable',
            'status'=>'nullable',
        ]);
    }
    public function create_data_and_translation(array $datas){
        $models = new Banner();
        $models->thumbnail = $datas['thumbnail'];
        $models->status = $datas['status'];
        $models->save();     
        $trans = new BannerTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $trans->subname = $datas['subname'];
        $trans->description = $datas['description'];
        $models->translations()->save($trans);
    }
    public function update_data_and_translation(array $datas,int $id){
        $models = $this->bannerRepository->findById($id);
        $models->thumbnail = $datas['thumbnail'];
        $models->status = $datas['status'];
        $models->save();
        $trans = BannerTranslation::where('language','=',session('locale'))->where('banner_id','=',$id)->first();
        if($trans == null){
        $trans = new BannerTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $trans->subname = $datas['subname'];
        $trans->description = $datas['description'];
        $models->translations()->save($trans);
        } else {
            $trans->name = $datas['name'];
            $trans->language = session('locale');
            $trans->subname = $datas['subname'];
            $trans->description = $datas['description'];
            $trans->save();
        }
    }
    public function delete_selected_data($models){
        return $models->delete();
    }
    public function change_status_and_update($model){
        if($model->status == 0){
            $model->status = 1;
        } else {
            $model->status = 0;
        }
        $model->save();
    }
    public function delete_selected_data_translation(int $id){
        $trans = BannerTranslation::where('theme_blog_id','=',$id)->get();
        foreach($trans as $tran){
            $tran->delete();
        }
    }
}