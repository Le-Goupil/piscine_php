<?php
function which_is_longer($str1,$str2){
    if (is_string($str1) && is_string($str2)){
        if (strlen($str1) > strlen($str2)){
            return strlen($str1);
        } else if (strlen($str1) < strlen($str2)){
            return strlen($str2);
        } else if (strlen($str1) == strlen($str2)) {
            return strlen($str1);
        }
    } else {
        return -1;
    }

}
// https://www.php.net/manual/fr/function.strcmp.php