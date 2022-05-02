<?php
function my_rounds($nb){
    $proche = round($nb, 0);
    $sup = ceil($nb);
    $inf = floor($nb);
    echo "Results : $proche - $sup - $inf\n";
}

// https://www.php.net/manual/fr/function.round.php
// https://www.php.net/manual/fr/function.ceil.php
// https://www.php.net/manual/fr/function.floor.php