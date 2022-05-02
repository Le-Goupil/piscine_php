<?php
function colle($x, $y){
    if ($x == 1 && $y == 1){
        echo "o\n";
        exit;
    }
    
    if ($x == 2 && $y == 2){
        echo "oo\noo\n";
        exit;
    }

    if ($x == 1 && $y== 2){
        echo "o\no\n";
        exit;
    }

    if ($x == 2 && $y== 1){
        echo "oo\n";
        exit;
    }


    if ($x == 0 || $y == 0){
        exit;
    }


    // Première ligne
    function horizontal($x, $y){
        $ret = "";

        switch ($x):
            case $x == 1 && $y > 1:
                $ret = "oo\n";
                break;
            case $x == 2:
                $ret = "oo\n";
                break;
            case $x == 1:
                $ret = "o\n";
                break;
            default:
                $ret = "o";
                for($i = 0; $i < $x-2; $i++){
                    $ret = $ret . "-";
                }
                $ret = $ret . "o\n";
        endswitch;

        echo($ret);
    }
    // Tout le reste
    function vertical($y, $x){
        $ret = "";
        $retSpace = "";
        $retFinal = "";

        switch ($y):
            case $y == 1 && $x > 1:
                for($i = 0; $i < $x-2; $i++){
                    $retFinal = $retFinal . "-";
                }
                $ret = $ret . "o" . $retFinal . "o\n";
                break;
            case $y == 1:
                $ret = "o\n";
                break;
            default:
            // Crée les éspaces
                for($i = 0; $i < $x-2; $i++){
                    $retSpace = $retSpace . " ";
                } 
            // | + espace + |\n
                for($i = 0; $i < $y-2; $i++){
                    $ret = $ret . "|" . $retSpace . "|\n";
                }
            //o + "-" * $x-2 + "o\n"
                for($i = 0; $i < $x-2; $i++){
                    $retFinal = $retFinal . "-";
                }
                $ret = $ret . "o" . $retFinal . "o\n";
        endswitch;

        echo($ret);
    }


horizontal($x, $y);
vertical($y, $x);
}