<?php
function str_lower_epur($str = NULL){
    if (is_string($str)){
        $str = trim($str);
        $str = strtolower($str);
        $str = preg_replace('/ {2,}/', " ", $str);
        $arr_str = str_split($str);
        for($i = 0; $i < count($arr_str); $i++){
            if ($arr_str[$i] == " "){
                $arr_str[$i - 1] = strtoupper($arr_str[$i - 1]);
            }
        }
        $arr_str[count($arr_str) -1] = strtoupper($arr_str[count($arr_str) -1]);
        $str = implode($arr_str);
        return $str;
    } else {
        return NULL;
    }
}