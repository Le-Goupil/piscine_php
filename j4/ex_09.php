<?php
function multiples($nb){
    for($i = $nb; $i < 200000; $i++){
        if ($i % $nb == 0){
            echo "$i\n";
        }
    }
}