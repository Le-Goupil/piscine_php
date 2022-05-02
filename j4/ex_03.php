<?php 
function print_age($age){
    switch(true):
        case ($age <= 0):
            echo "Enfantillage...\n";
            break;
        case ($age == 42):
            echo "the answer.\n";
            break;
        default:
            echo "je peux aller en boite\n";
            break;
    endswitch;

    if(true){
        return;
    }
}