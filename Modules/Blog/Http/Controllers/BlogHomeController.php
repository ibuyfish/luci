<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Repositories\BlogCategoryRepository;
use Modules\Blog\Http\Repositories\BlogRepository;

class BlogHomeController extends Controller
{
    private $blogCategoryRepository;
    private $blogRepository;
    public function __construct(BlogCategoryRepository $blogCategoryRepository,BlogRepository $blogRepository)
    {
        $this->blogCategoryRepository = $blogCategoryRepository;
        $this->blogRepository = $blogRepository;
    }
    public function list($id,$slug){
        $model = $this->blogCategoryRepository->findById($id);
        $blogs = $model->childs()->paginate(12);
        return view('blog::home_category.index',compact('model','blogs'));
    }
    public function detail($id,$slug){
        $model = $this->blogRepository->findById($id);
        return view('blog::home_detail.index',compact('model'));
    }
}
