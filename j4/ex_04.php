<?php
function print_until($max){
    if ($max >= 0){
        $i = 0;
        while ($i <= $max){
            echo "$i\n";
            $i++; 
        }
        return true;
    } else {
        echo "Boulet !\n";
        return false;
    }
}