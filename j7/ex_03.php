<?php
function my_pow($nb_a = NULL, $nb_b = NULL){
    if (is_int($nb_a) && is_int($nb_b) && $nb_a != 0 && $nb_b > 0){
        echo $nb_a ** $nb_b;
        return $nb_a ** $nb_b;
    } else if ($nb_a = 0 || $nb_b = 0) {
        return 1;
    } else if (!is_int($nb_a) || !is_int($nb_b) || $nb_b < 0){
        return NULL;
    }
}