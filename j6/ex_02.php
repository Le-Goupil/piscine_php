<?php
function my_cat_files(){
    global $argv;
    global $argc;
    global $finalText;
    foreach ($argv as $key => $arg) {
        if ($argc != $key + 1) {
            $handle = fopen($arg, "r");
            $text = fread($handle, filesize($arg));
            $finalText = $text."\n_____\n";
        } else {
            $handle = fopen($arg, "r");
            $text = fread($handle, filesize($arg));
            $finalText = $finalText.$text;
        }
    }
    return $finalText;
}