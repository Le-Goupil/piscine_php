<?php
function get_execution_time(){
   return number_format($_SERVER['REQUEST_TIME_FLOAT'], $decimals = 7);
}