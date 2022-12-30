<?php

namespace Modules\Theme\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Theme\Entities\ThemeProduct;
use PDO;

class ThemeCategory extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    public function translations(){
        $lang = session('locale');
        return $this->hasMany(ThemeCategoryTranslation::class)->where('language','=',$lang);
    }
    public function products(){
        return $this->hasMany(ThemeProduct::class);
    }
    public function parent(){
        return $this->belongsTo(ThemeCategory::class ,'parent_id');
    }
    public function childs(){
        return $this->hasMany(ThemeCategory::class ,'parent_id');
    }
    protected static function newFactory()
    {
        return \Modules\Theme\Database\factories\ThemeCategoryFactory::new();
    }
}
