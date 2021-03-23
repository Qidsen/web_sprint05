<?php
function firstUpper($string):string{
    if(!$string) return "";
    $string = trim($string);
    $string = strtolower($string);
    $string[0] = strtoupper($string[0]);
    return $string;
}
?>
