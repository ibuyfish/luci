<?php

namespace Modules\Policy\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PDO;

class Policy extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    public function translations(){
        $lang = session('locale');
        return $this->hasMany(PolicyTranslation::class)->where('language','=',$lang);
    }
    // protected static function newFactory()
    // {
    //     return \Modules\Theme\Database\factories\ThemeCategoryFactory::new();
    // }
}
