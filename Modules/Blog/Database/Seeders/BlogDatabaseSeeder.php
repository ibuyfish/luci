<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Entities\BlogTranslation;

class BlogDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        Blog::factory()->count(50)->create();
        BlogTranslation::factory()->count(50)->create();
        // $this->call("OthersTableSeeder");
    }
}
