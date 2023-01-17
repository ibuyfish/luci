<?php 
namespace Modules\Recruit\Http\Hooks;
use Modules\Recruit\Http\Repositories\RecruitApplicantRepository;
use Modules\Recruit\Entities\RecruitApplicant;

class RecruitApplicantHook {
    private $recruitApplicantRepository;
    public function __construct(RecruitApplicantRepository $recruitApplicantRepository)
    {
        $this->recruitApplicantRepository = $recruitApplicantRepository;
    }
    public function get_search_data(string $search){
        return $this->recruitApplicantRepository->search($search);
    }
    public function get_pagination_data(int $limit){
        return $this->recruitApplicantRepository->paginate($limit);
    }
    public function get_edit_data(int $id){
        return $this->recruitApplicantRepository->findById($id);
    }
    public function validate_incoming_request($request){
        return $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'phone'=> 'required',
            'position'=> 'required',
            'status'=>'nullable',
        ]);
    }
    public function create_data_and_translation(array $datas){
        $models = new RecruitApplicant();
        $models->name = $datas['name'];
        $models->email = $datas['email'];
        $models->phone = $datas['phone'];
        $models->position = $datas['position'];
        $models->status = $datas['status'];
        $models->save();     
    }
    public function update_data_and_translation(array $datas,int $id){
        $models = $this->recruitApplicantRepository->findById($id);
        $models->name = $datas['name'];
        $models->email = $datas['email'];
        $models->phone = $datas['phone'];
        $models->position = $datas['position'];
        $models->status = $datas['status'];
        $models->save();
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
}