<?php
function calc($operation, $nb1, $nb2){
    if($operation == '+'){
        return $nb1+$nb2;
    } elseif ($operation == '*') {
        return $nb1*$nb2;
    } elseif ($operation == '/') {
        return $nb1/$nb2;
    } elseif ($operation == '%') {
        return $nb1%$nb2;
    } elseif ($operation == '-') {
        return $nb1-$nb2;
    }
}
?>