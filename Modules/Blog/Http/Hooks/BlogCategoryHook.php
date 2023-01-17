<?php 
namespace Modules\Blog\Http\Hooks;
use Modules\Blog\Http\Repositories\BlogCategoryRepository;
use Modules\Blog\Entities\BlogCategory;
use Modules\Blog\Entities\BlogCategoryTranslation;

class BlogCategoryHook {
    private $blogCategoryRepository;
    public function __construct(BlogCategoryRepository $blogCategoryRepository)
    {
        $this->blogCategoryRepository = $blogCategoryRepository;
    }
    public function get_search_data(string $search){
        return $this->blogCategoryRepository->search($search);
    }
    public function get_pagination_data(int $limit){
        return $this->blogCategoryRepository->paginate($limit);
    }
    public function get_edit_data(int $id){
        return $this->blogCategoryRepository->findById($id);
    }
    public function validate_incoming_request($request){
        return $request->validate([
            'name'=> 'required',
            'status'=>'nullable',
        ]);
    }
    public function create_data_and_translation(array $datas){
        $models = new BlogCategory();
        $models->status = $datas['status'];
        $models->save();     
        $trans = new BlogCategoryTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $models->translations()->save($trans);
    }
    public function update_data_and_translation(array $datas,int $id){
        $models = $this->blogCategoryRepository->findById($id);
        $models->status = $datas['status'];
        $models->save();
        $trans = BlogCategoryTranslation::where('language','=',session('locale'))->where('blog_category_id','=',$id)->first();
        if($trans == null){
        $trans = new BlogCategoryTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $models->translations()->save($trans);
        } else {
            $trans->name = $datas['name'];
            $trans->language = session('locale');
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
        $trans = BlogCategoryTranslation::where('blog_category_id','=',$id)->get();
        foreach($trans as $tran){
            $tran->delete();
        }
    }
}