<?php

namespace Modules\Blog\Database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Blog\Entities\Blog;

class BlogTranslationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Blog\Entities\BlogTranslation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $blog = Blog::all()->random();
        return [
            'name' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'subname'=>fake()->paragraph($nbSentences = 1, $variableNbSentences = true),
            'description'=>fake()->randomHtml(10,5),
            'language'=>'vi',
            'blog_id'=> $blog->id,
        ];
    }
}

