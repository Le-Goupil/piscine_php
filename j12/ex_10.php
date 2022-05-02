<?php
foreach ($argv as $key => $value) {
    if($key != $argv[0]){
        echo sha1($value)."\n";
    }
}