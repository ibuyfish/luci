<?php 
namespace Modules\Policy\Http\Hooks;
use Modules\Policy\Http\Repositories\PolicyRepository;
use Modules\Policy\Entities\Policy;
use Modules\Policy\Entities\PolicyTranslation;

class PolicyHook {
    private $policyRepository;
    public function __construct(PolicyRepository $policyRepository)
    {
        $this->policyRepository = $policyRepository;
    }
    public function get_search_data(string $search){
        return $this->policyRepository->search($search);
    }
    public function get_pagination_data(int $limit){
        return $this->policyRepository->paginate($limit);
    }
    public function get_edit_data(int $id){
        return $this->policyRepository->findById($id);
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
        $models = new Policy();
        $models->thumbnail = $datas['thumbnail'];
        $models->status = $datas['status'];
        $models->save();     
        $trans = new PolicyTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $trans->subname = $datas['subname'];
        $trans->description = $datas['description'];
        $models->translations()->save($trans);
    }
    public function update_data_and_translation(array $datas,int $id){
        $models = $this->policyRepository->findById($id);
        $models->thumbnail = $datas['thumbnail'];
        $models->status = $datas['status'];
        $models->save();
        $trans = PolicyTranslation::where('language','=',session('locale'))->where('recruit_id','=',$id)->first();
        if($trans == null){
        $trans = new PolicyTranslation();
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
        $trans = PolicyTranslation::where('policy_id','=',$id)->get();
        foreach($trans as $tran){
            $tran->delete();
        }
    }
}