<?php
function my_generate_file($name){
    $file = $name . ".txt";
    fopen($file, "w+");

    if (file_exists($file) == false) {
        return false;
    } else {
        return true;
    }
}