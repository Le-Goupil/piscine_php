<?php
function clear_and_replace($string,$word){
    $string = trim($string);
    $word = "/$word/";
    return preg_replace($word, "Pangolin", $string, 2);
}