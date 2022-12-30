<?php

namespace Modules\Theme\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Theme\Entities\ThemeProduct;
use PDO;

class ThemeProductImage extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];
    public function product(){
        return $this->belongsTo(ThemeProduct::class);
    }
    protected static function newFactory()
    {
        return \Modules\Theme\Database\factories\ThemeProductImageFactory::new();
    }
}
