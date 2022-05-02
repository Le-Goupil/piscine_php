<?php

function compress(){
// Déclaration des variables;
    global $argv;
    global $argc;
    global $finalText;
    $file = $argv;
// Transforme les argv en chemin de fichier/dossier;
    foreach ($file as $key => $value) {
        if ($key != 0 && is_file("./".$value)){
            $text = file_get_contents("./".$value);
            $name = basename($value);
            // file_put_contents("output.mytar", "@@".$name."@@", FILE_APPEND);
            // Censé créer des encres pour regex, nom de fichier + chmod du fichier
            file_put_contents("output.mytar", bin2hex("Fichier $key --- ".$text."\n\n"), FILE_APPEND);
        } 
    }
// Prend le content du fichier + bin2hex du fichier dans output.mytar;

}
compress();