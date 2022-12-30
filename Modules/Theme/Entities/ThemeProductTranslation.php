<?php

namespace Modules\Theme\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThemeProductTranslation extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    public function product(){
        return $this->belongsTo(ThemeProduct::class);
    }
    protected static function newFactory()
    {
        return \Modules\Theme\Database\factories\ThemeProductTranslationFactory::new();
    }
}
