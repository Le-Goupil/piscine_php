<?php
function my_reset_session(){
    foreach ($key as $value) {
        unset ($_SESSION[$key]);
    }
    session_destroy();
    session_reset();
}