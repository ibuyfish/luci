<?php 
namespace Modules\Solution\Http\Hooks;
use Modules\Solution\Http\Repositories\SolutionRepository;
use Modules\Solution\Entities\Solution;
use Modules\Solution\Entities\SolutionTranslation;

class SolutionHook {
    private $solutionRepository;
    public function __construct(SolutionRepository $solutionRepository)
    {
        $this->solutionRepository = $solutionRepository;
    }
    public function get_search_data(string $search){
        return $this->solutionRepository->search($search);
    }
    public function get_pagination_data(int $limit){
        return $this->solutionRepository->paginate($limit);
    }
    public function get_edit_data(int $id){
        return $this->solutionRepository->findById($id);
    }
    public function validate_incoming_request($request){
        return $request->validate([
            'name'=> 'required',
            'banner'=>'nullable',
            'feature_head'=>'nullable',
            'feature_body'=>'nullable',
            'optimal_head'=>'nullable',
            'optimal_body'=>'nullable',
            'include_head'=>'nullable',
            'include_body'=>'nullable',
            'status'=>'nullable',
        ]);
    }
    public function create_data_and_translation(array $datas){
        $feature_data = [
            'name'=> $datas['feature_head']['name'],
            'subname'=> $datas['feature_head']['subname'],
            'array' => $datas['feature_body'],
        ];
        $optimal_data = [
            'name'=> $datas['optimal_head']['name'],
            'array' => $datas['optimal_body'],
        ];
        $include_data = [
            'name'=> $datas['include_head']['name'],
            'subname'=> $datas['include_head']['subname'],
            'array' => $datas['include_body'],
        ];
        $models = new Solution();
        $models->status = $datas['status'];
        $models->save();     
        ////////////////
        $trans = new SolutionTranslation();
        $trans->name = $datas['name'];
        $trans->banner = json_encode($datas['banner']);
        $trans->feature = json_encode($feature_data);
        $trans->optimal = json_encode($optimal_data);
        $trans->include = json_encode($include_data);
        $trans->language = session('locale');
        $models->translations()->save($trans);
    }
    public function update_data_and_translation(array $datas,int $id){
        $feature_data = [
            'name'=> $datas['feature_head']['name'],
            'subname'=> $datas['feature_head']['subname'],
            'array' => $datas['feature_body'],
        ];
        $optimal_data = [
            'name'=> $datas['optimal_head']['name'],
            'array' => $datas['optimal_body'],
        ];
        $include_data = [
            'name'=> $datas['include_head']['name'],
            'subname'=> $datas['include_head']['subname'],
            'array' => $datas['include_body'],
        ];
        $trans = SolutionTranslation::where('language','=',session('locale'))->where('solution_id','=',$id)->first();
            $trans->name = $datas['name'];
            $trans->language = session('locale');
            $trans->banner = json_encode($datas['banner']);
            $trans->feature = json_encode($feature_data);
            $trans->optimal = json_encode($optimal_data);
            $trans->include = json_encode($include_data);
            $trans->save();
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
        $trans = SolutionTranslation::where('solution_id','=',$id)->get();
        foreach($trans as $tran){
            $tran->delete();
        }
    }
}