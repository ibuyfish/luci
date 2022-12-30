<?php
namespace App\Utilities;
class Helper
{
    public static function trans($value,$name)
    {
        if(isset($value->translations[0])){
            return $value->translations[0]->{$name};
        }
        return '';
    }
}