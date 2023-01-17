<?php

namespace Modules\Recruit\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PDO;

class RecruitApplicant extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = [];
    // protected static function newFactory()
    // {
    //     return \Modules\Theme\Database\factories\ThemeCategoryFactory::new();
    // }
}
