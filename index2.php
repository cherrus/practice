<?php
function checkStringEntry($find_that_str, $find_there_str){
    $result = false;
    $len_find_that_str = strlen($find_that_str);
    $len_find_there_str = strlen($find_there_str);
    $entry_flag = 0;
    $index_i = 0;
    $index_j = 0;
    for($index_i; $index_i < $len_find_that_str; $index_i++){
        for($index_j; $index_j < $len_find_there_str; $index_j++){
            if($find_that_str[$index_i] == $find_there_str[$index_j]){
                $entry_flag++;
                if($index_i < ($len_find_that_str-1))
                    $index_i++;
                else
                    $index_j = $index_i = $len_find_there_str;
                }
            else{
                $index_i = 0;
                $index_j = &$index_j-1;
                $entry_flag = 0;
            }
        }
    }
    if($entry_flag == $len_find_that_str)
        $result = true;
    return $result;
}

