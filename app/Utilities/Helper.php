<?php
use Illuminate\Support\Str;

function translate($value,$name) {
    if(isset($value->translations[0])){
        return $value->translations[0]->{$name};
     }
     return '';
}
function limit($value,$limit) {
    return Str::limit($value,$limit);
}
function slug($value,$name) {
    if(isset($value->translations[0])){
        return Str::slug($value->translations[0]->{$name});
     }
     return '';
}
?>