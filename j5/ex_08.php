<?php
function helix_post_finder(){
    foreach ($_POST as $key => $value){
        if ($key == "phelix"){
            echo $value;
        } else {
            echo NULL;
        }
    }
}