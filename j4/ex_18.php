<?php

function return_calls(){
    static $count = 0;
    for($i = 0; $i < 3; $i++){
        $count ++;
    }
    return $count;
}