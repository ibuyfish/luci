<?php

namespace Modules\Theme\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThemeBlogTranslation extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    public function blog(){
        return $this->belongsTo(ThemeBlog::class);
    }
    // protected static function newFactory()
    // {
    //     return \Modules\Theme\Database\factories\ThemeCategoryTranslationFactory::new();
    // }
}
