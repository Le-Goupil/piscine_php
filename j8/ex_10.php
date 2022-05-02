<?php
function return_calls(){
    static $count;
    $count++;
    if ($count % 2 == 0) {
        return $count;
    } else {
        return NULL;
    }
}