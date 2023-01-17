<?php

namespace Modules\Blog\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Entities\BlogCategory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Blog\Entities\Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category = BlogCategory::all()->random();
        return [
            'author' => fake()->name(),
            'status' => 1,
            'blog_category_id' => $category->id,
            'view'=> rand(1,100),
            'thumbnail'=>'/assets/images/demo/blog' . rand(1,9).'.png',
        ];
    }
}

