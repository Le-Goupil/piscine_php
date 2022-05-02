<?php
function print_film_from_nbr($nbr){
    switch(true):
        case ($nbr == 0):
            echo "l'homme invisible\n";
            break;
        case ($nbr == 3):
            echo "Les trois freres\n";
            break;
        case ($nbr == 6):
            echo "Sixieme sens\n";
            break;
        case ($nbr == 23):
            echo "Le nombre 23\n";
            break;
        case ($nbr == 28):
            echo "28 jours plus tard\n";
            break;
        default:
            echo "Je ne connais pas.\n";
            break;
    endswitch;
}
