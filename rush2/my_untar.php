<?php

function decompress(){
    if (file_exists("./output.mytar")){
        $file = file_get_contents("./output.mytar");
        file_put_contents("decompress", hex2bin($file));
    }
}
decompress();

//rip;