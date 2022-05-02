<?php
function my_print_session($key){
    if (!isset($SESSION[$key])){
        return;
    } else {
        echo $SESSION[$key];
    }
}