<?php
$numberArray = [1,2,3];
$numberOfElement = count($numberarray);

$i = 0;
while ($i < $numberOfElement){
    echo "now is $numberArray[$i] <br>";
    $i++;
}

//do while loop 是先做一次再做判斷是否KEEP-ON GOING
$k = 0;
do {
    echo "now is $numberArray[$i] <br>";
    $i++;
}while($k < $numberOfElement)

?>