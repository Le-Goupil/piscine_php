<?php

function print_range($min){
    $bool = $min == 42 ? true : false;
    $i = $min;
    echo("$min\n");
    do{
        $i++;
        echo "$i\n";
    }while ($i <= 42);
    
    return $bool;
}
