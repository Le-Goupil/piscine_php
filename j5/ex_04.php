<?php

function my_print_cookie($key){
    if (!isset($_COOKIE[$key])){
        return;
    } else {
        echo $_COOKIE[$key] . "_END\n";
    }
}