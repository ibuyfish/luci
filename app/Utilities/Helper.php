<?php
function translate($value,$name) {
    if(isset($value->translations[0])){
        return $value->translations[0]->{$name};
     }
     return '';
}
?>