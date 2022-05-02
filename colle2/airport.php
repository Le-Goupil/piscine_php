<?php
    
// USAGE : php airport.php [OBLIGATOIRE] => "string a affiché" [OPTIONNEL] => "COULEUR" {"Red", "Green", "Yellow", "Blue", défault = .} [OPTIONNEL] "Nombre d'affichage" (par défault 100); 


function test(){
    global $argv;
    global $argc;

    $str = $argv[1]; // $str = argv 1
    if (isset($argv[2])){
        $color = $argv[2];
    } else {
        $color = "";
    }
    static $count; // pour la condition de récursivité.
    $count++;


    // Choix de la couleur

    if ($color == "Red") {
        $color = "\e[31m";
    } else if ($color == "Green") {
        $color = "\e[32m";
    } else if ($color === "Yellow") {
        $color = "\e[33m";
    } else if ($color === "Blue") {
        $color = "\e[34m";
    } else if (!isset($argv[2])) {
        $color = "";
    } else {
        $color = "";
    }


    // Exécution du texte
        
    $arr_str = str_split($str); // création tableau a partir des char du string
    $num_char = count($arr_str);
    if ($count - 1 < 1) {
        system('clear');
        for($i = 0; $i < $num_char; $i++){
            usleep(50000);
            $text = $arr_str[$i];
            echo $color.$text;
        }
        sleep(1);
            
        test($str);

    }
    echo "\n";
}
test();
// usleep(50000); = stop le programme pendant 50000 nano secondes;