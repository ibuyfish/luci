<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [];
    protected $guarded = [];
    public function blog(){
        return $this->belongsTo(Blog::class);
    }
    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\BlogTranslationFactory::new();
    }
}
