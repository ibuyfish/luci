<?php

namespace Modules\Recruit\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecruitTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];
    public function recruit(){
        return $this->belongsTo(Recruit::class);
    }
    // protected static function newFactory()
    // {
    //     return \Modules\Theme\Database\factories\ThemeCategoryTranslationFactory::new();
    // }
}
