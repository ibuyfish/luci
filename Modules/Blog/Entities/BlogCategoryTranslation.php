<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogCategoryTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];
    public function blog_category(){
        return $this->belongsTo(BlogCategory::class);
    }
    // protected static function newFactory()
    // {
    //     return \Modules\Theme\Database\factories\ThemeCategoryTranslationFactory::new();
    // }
}
