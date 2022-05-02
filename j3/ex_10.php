<?php
    function print_calls(){
        static $count = 0;
        $count += 1;
        echo($count);
    }
?>