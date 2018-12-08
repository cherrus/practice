<?php

function checkStringEntry($find_that_str, $find_there_str){
    $result = false;
    print "Ищем " . $find_that_str . " в " . $find_there_str . "<br>";
    $len_find_that_str = strlen($find_that_str);
    $len_find_there_str = strlen($find_there_str);
    if($len_find_that_str > $len_find_there_str)
        print "Искомая строка длиннее строки поиска<br>";
    else{
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
    }
    return $result;
}
//1
if(checkStringEntry("coc", "cocs"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
//2
if(checkStringEntry("ab", "cocs"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
//3
if(checkStringEntry("bam", "alabubama"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
//4
if(checkStringEntry("jean", "bluejeans"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
//5
if(checkStringEntry("pass", "bluejeans"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
//6
if(checkStringEntry("cost", "holocost"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
//7
if(checkStringEntry("cohsr", "co"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
//8
if(checkStringEntry("mom", "You are mom"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
//9
if(checkStringEntry("brakes my", "You brakis brakes my heart"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
//10
if(checkStringEntry("alien", "you"))
    print "Искомая строка найдена<br><br>";
else
    print "Искомая строка не найдена<br><br>";
