<?php 
namespace Modules\Recruit\Http\Hooks;
use Modules\Recruit\Http\Repositories\RecruitRepository;
use Modules\Recruit\Entities\Recruit;
use Modules\Recruit\Entities\RecruitTranslation;

class RecruitHook {
    private $recruitRepository;
    public function __construct(RecruitRepository $recruitRepository)
    {
        $this->recruitRepository = $recruitRepository;
    }
    public function get_search_data(string $search){
        return $this->recruitRepository->search($search);
    }
    public function get_pagination_data(int $limit){
        return $this->recruitRepository->paginate($limit);
    }
    public function get_edit_data(int $id){
        return $this->recruitRepository->findById($id);
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
        $models = new Recruit();
        $models->thumbnail = $datas['thumbnail'];
        $models->status = $datas['status'];
        $models->save();     
        $trans = new RecruitTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $trans->subname = $datas['subname'];
        $trans->description = $datas['description'];
        $models->translations()->save($trans);
    }
    public function update_data_and_translation(array $datas,int $id){
        $models = $this->recruitRepository->findById($id);
        $models->thumbnail = $datas['thumbnail'];
        $models->status = $datas['status'];
        $models->save();
        $trans = RecruitTranslation::where('language','=',session('locale'))->where('recruit_id','=',$id)->first();
        if($trans == null){
        $trans = new RecruitTranslation();
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
        $trans = RecruitTranslation::where('recruit_id','=',$id)->get();
        foreach($trans as $tran){
            $tran->delete();
        }
    }
}