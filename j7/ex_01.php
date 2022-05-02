<?php
function my_facto($nbr = NULL){
    $result = 1;
    if (is_int($nbr) && $nbr > 0){
        for($i = 1; $i <= $nbr; $i++){
            $result = $result * $i;
        }
    } else if ($nbr == 0){
        return 1;
    } else if ($nbr < 0 || !is_int($nbr)){
        return NULL;
    }
}