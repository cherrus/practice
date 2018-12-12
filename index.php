<?php
function checkStringEntry(string $findThatString, string $findThereString):bool{
    $result = false;
    if( ($findThatString == "") || ($findThereString == "") ){
        return $result;
    }
    $lenFindThatString = (strlen($findThatString)-1);
    $lenFindThereString = (strlen($findThereString)-1);
    if($lenFindThatString > $lenFindThereString){
        return $result;
    }
    print "Ищем " . $findThatString . " в " . $findThereString . "<br>";
    $indexJ = 0;
    $difference = $lenFindThereString - $lenFindThatString +1;
    for($indexJ; $indexJ < $difference; $indexJ++) {
        if (($findThatString[0] == $findThereString[$indexJ]) && ($findThatString[$lenFindThatString] == $findThereString[$indexJ + $lenFindThatString])) {
            $entryFlag = 2;
            $indexI = 1;
            for ($indexI; $indexI < $lenFindThatString; $indexI++) {
                if ($findThatString[$indexI] == $findThereString[$indexI + $indexJ]) {
                    $entryFlag++;
                }
            }
            if ($entryFlag > $lenFindThatString) {
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