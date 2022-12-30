<?php

namespace Modules\Theme\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Theme\Entities\ThemeCategory;
use PDO;

class ThemeProduct extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    public function translations(){
        $lang = session('locale');
        return $this->hasMany(ThemeProductTranslation::class)->where('language','=',$lang);
    }
    public function category(){
        return $this->belongsTo(ThemeCategory::class,'theme_category_id');
    }
    public function images(){
        return $this->hasMany(ThemeProductImage::class);
    }
    protected static function newFactory()
    {
        return \Modules\Theme\Database\factories\ThemeProductFactory::new();
    }
}
