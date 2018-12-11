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
    $entryFlag = 0;
    $indexI = 0;
    $indexJ = 0;
    for($indexI; $indexI <= $lenFindThatString; $indexI++){
        for($indexJ; $indexJ <= $lenFindThereString; $indexJ++){
            if($findThatString[$indexI] == $findThereString[$indexJ]){
                $entryFlag++;
                if($indexI < $lenFindThatString) {
                    $indexI++;
                }
                else {
                    break;
                }
            }
            elseif($entryFlag > 0){
                $indexI = 0;
                $indexJ = $indexJ-1;
                $entryFlag = 0;
            }
        }
    }
    if($entryFlag == $lenFindThatString+1)
        $result = true;
    return $result;
}
//1
print checkStringEntry("", "cocs")."<br>";
//2
print(checkStringEntry("ab", "cocs"))."<br>";
//3
print(checkStringEntry("bam", "alabubama"))."<br>";
//4
print(checkStringEntry("b", "bluejeans"))."<br>";
//5
print(checkStringEntry("lu", "bluejeans"))."<br>";
//6
print(checkStringEntry("cost", "holocost"))."<br>";
//7
print(checkStringEntry("cohsr", "co"))."<br>";
//8
print(checkStringEntry("mom", "You are mom"))."<br>";
//9
print(checkStringEntry("brakes my", "You brakis brakes my heart"))."<br>";
//10
print(checkStringEntry("alien", "you"))."<br>";