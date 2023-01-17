<?php

namespace App\View;

use Illuminate\View\View;
use Modules\Blog\Http\Repositories\BlogCategoryRepository;

class BlogCategoryComposer
{
    private $blogCategoryRepository;
    public function __construct(BlogCategoryRepository $blogCategoryRepository)
    {
        $this->blogCategoryRepository = $blogCategoryRepository;
    }
    public function compose(View $view)
    {
        $view->with('blog_categories', $this->blogCategoryRepository->all());
    }
}
