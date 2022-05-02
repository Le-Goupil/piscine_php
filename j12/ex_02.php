<?php
function cesar2($chaine){
    $tolower = strtolower($chaine);
    $str = str_split($tolower);

    foreach ($str as $key => $value) {
        if (preg_match('/\w/', $value)){
            if ($value == "y") {
                $str[$key] = "a";
            } else if ($value == "z"){
                $str[$key] = "b";
            } else {
                $char = bin2hex($value);
                $char = hexdec($char);
                $char = $char + 2;
                $char = dechex($char);
                $char = hex2bin($char);
                $str[$key] = $char;
            } 
        }
    }

    $str = implode($str);
    $str = $str . "\n";
    echo $str;
}