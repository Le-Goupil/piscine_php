<?php
function my_facto_rec($nbr = NULL){
    if($nbr == 0){
        return 1;
    } else if ($nbr === NULL) {
        return NULL;
    } else if ($nbr < 0 || !is_int($nbr)){
        return NULL;
    } else {
        return $nbr * my_facto_rec($nbr-1);
    }
}