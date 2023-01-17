<?php

namespace Modules\Policy\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PolicyTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];
    public function policy(){
        return $this->belongsTo(Policy::class);
    }
    // protected static function newFactory()
    // {
    //     return \Modules\Theme\Database\factories\ThemeCategoryTranslationFactory::new();
    // }
}
