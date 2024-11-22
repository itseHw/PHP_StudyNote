<?php

$numberArray = [0,1,2,3,4,5];
$numberToEng = [
    "zero" => 0,
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4,
    "five" => 5,
];

//普通出數值
foreach($numberArray as $value){
    echo $value."<br>";
}
//will print out 0 1 2 3 4 5

//show key and value
foreach($numberArray as $key => $value){
    echo "Key = ". $key. ", Value = ". $value . "<br>";
}
?>