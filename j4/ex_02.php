<?php

function print_status($age){
    if ($age < 18){
        echo "Site interdit aux mineurs.\n";
    } else {
        echo "Vous pouvez entrer !\n";
    }
}