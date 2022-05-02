<?php
function make_pangolins(&$my_array){
    foreach ($my_array as $key => $value) {
        $value = "pangolin";
        $my_array[$key] = $value;
    }
}