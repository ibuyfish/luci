<?php

namespace Modules\Theme\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Theme\Entities\ThemeProduct;
use PDO;

class ThemeBlog extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    public function translations(){
        $lang = session('locale');
        return $this->hasMany(ThemeBlogTranslation::class)->where('language','=',$lang);
    }
    // protected static function newFactory()
    // {
    //     return \Modules\Theme\Database\factories\ThemeCategoryFactory::new();
    // }
}
