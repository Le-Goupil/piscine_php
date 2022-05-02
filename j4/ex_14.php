<?php
function goto_is_evil(){
    $loop = 0;
    start: 
    if ($loop < 42){
        $loop++;
        var_dump($loop);
        echo "wac\n";
    } else {
        goto b;
    }
    goto start;
    b:
}