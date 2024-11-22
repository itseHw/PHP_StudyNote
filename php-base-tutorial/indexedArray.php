<?php

$a = array('t','b','x','c');
$b = ['t','b','x','c'];
//$a and $b are same, which is a different create array method.

//array 起始值是 0

echo count($a); //count 是數$a內有多少內容，e.g. $a 有3個

$one_value = $a[0]; //$one_value seted value to t
$second_value = $a[1];
$fourth_value = $a[3];

//following code will give same result to above line(11-13)
[$one_value,$second_value, ,$fourth_value] = $b;
?>