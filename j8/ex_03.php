<?php
function my_mail($mail){
    if(is_string($mail) && isset($mail)){
        preg_match('/@+(\w+\.)+/', $mail, $matches);
        $matches[0] = substr($matches[0], 1, -1)."\n";
        echo $matches[0];
    }
}