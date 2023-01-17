<?php 
namespace Modules\Blog\Http\Hooks;
use Modules\Blog\Http\Repositories\BlogRepository;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\BlogTranslation;

class BlogHook {
    private $blogRepository;
    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }
    public function get_search_data(string $search){
        return $this->blogRepository->search($search);
    }
    public function get_pagination_data(int $limit){
        return $this->blogRepository->paginate($limit);
    }
    public function get_edit_data(int $id){
        return $this->blogRepository->findById($id);
    }
    public function validate_incoming_request($request){
        return $request->validate([
            'name'=> 'required',
            'blog_category_id'=>'required',
            'subname'=>'required',
            'description'=>'required',
            'thumbnail'=>'nullable',
            'status'=>'nullable',
            'author'=>'nullable',
        ]);
    }
    public function create_data_and_translation(array $datas){
        $models = new Blog();
        $models->thumbnail = $datas['thumbnail'];
        $models->author = $datas['author'];
        $models->blog_category_id = $datas['blog_category_id'];
        $models->status = $datas['status'];
        $models->save();     
        $trans = new BlogTranslation();
        $trans->name = $datas['name'];
        $trans->language = session('locale');
        $trans->subname = $datas['subname'];
        $trans->description = $datas['description'];
        $models->translations()->save($trans);
    }
    public function update_data_and_translation(array $datas,int $id){
        $models = $this->blogRepository->findById($id);
        $models->thumbnail = $datas['thumbnail'];
        $models->blog_category_id = $datas['blog_category_id'];
        $models->author = $datas['author'];
        $models->status = $datas['status'];
        $models->save();
        $trans = BlogTranslation::where('language','=',session('locale'))->where('blog_id','=',$id)->first();
        if($trans == null){
        $trans = new BlogTranslation();
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
        $trans = BlogTranslation::where('blog_id','=',$id)->get();
        foreach($trans as $tran){
            $tran->delete();
        }
    }
}