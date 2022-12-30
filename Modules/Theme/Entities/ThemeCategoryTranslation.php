<?php

namespace Modules\Theme\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThemeCategoryTranslation extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    public function category(){
        return $this->belongsTo(ThemeCategory::class);
    }
    protected static function newFactory()
    {
        return \Modules\Theme\Database\factories\ThemeCategoryTranslationFactory::new();
    }
}
