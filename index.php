<?php
function checkStringEntry(string $needle, string $haystack):bool{
    $result = false;
    if( ($needle == "") || ($haystack == "") ){
        return $result;
    }
    $needleLast = (strlen($needle)-1);
    $haystackLast = (strlen($haystack)-1);
    if($needleLast > $haystackLast){
        return $result;
    }
    print "Ищем " . $needle . " в " . $haystack . "<br>";
    $indexH = 0;
    $difference = $haystackLast - $needleLast +1;
    for($indexH; $indexH < $difference; $indexH++) {
        if ( ($needle[0] == $haystack[$indexH]) && ($needle[$needleLast] == $haystack[$indexH + $needleLast]) ) {
            $entryFlag = 2;
            $indexN = 1;
            for ($indexN; $indexN < $needleLast; $indexN++) {
                if ($needle[$indexN] == $haystack[$indexN + $indexH]) {
                    $entryFlag++;
                }
            }
            if ($entryFlag > $needleLast) {
                $result = true;
                return $result;
            }
        }
    }
    return $result;
}
//1
print checkStringEntry("", "cocs")."<br>";
//2
print(checkStringEntry("abc", "coasc"))."<br>";
//3
print(checkStringEntry("bam", "alabubama"))."<br>";
//4
print(checkStringEntry("b", "bluejeans"))."<br>";
//5
print(checkStringEntry("lu", "bluejeans"))."<br>";
//6
print(checkStringEntry("cost", "holocost"))."<br>";
//7
print(checkStringEntry("cohsr", ""))."<br>";
//8
print(checkStringEntry("mo", "You are mom"))."<br>";
//9
print(checkStringEntry("brakes my", "You brakis brakes my heart"))."<br>";
//10
print(checkStringEntry("alien", "you"))."<br>";