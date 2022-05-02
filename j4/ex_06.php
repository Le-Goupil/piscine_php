<?php 
function get_angry_bird($nbr){
    $str="";
    for ($i = 1; $i <= $nbr; $i++){
        $str = $str . "piou";
    }
    $str = $str . "\n";
    return $str;
}