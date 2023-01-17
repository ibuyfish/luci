<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PDO;

class BlogCategory extends Model
{
    use HasFactory;
        
    protected $fillable = [];
    protected $guarded = [];
    public function translations(){
        $lang = session('locale');
        return $this->hasMany(BlogCategoryTranslation::class)->where('language','=',$lang);
    }
    public function childs(){
        return $this->hasMany(Blog::class);
    }
    // protected static function newFactory()
    // {
    //     return \Modules\Theme\Database\factories\ThemeCategoryFactory::new();
    // }
}
