<h3>PHP 字串 String </h3>

<?php
$hi         = 'hello';
$learning   = "php";   
$teacher    = '網上影片'；
$occupation = "全端網站開發"；

//連接 是用.
echo $hi.",".$learning;

//輸出變數 ＋ "" 和 '' 區別
/*
echo "" ,"" 內有變數，會輸出到變數的值。
echo '', ''內有變數，都只會原句出。
*/

// strlen() 可以正確查到()英文字的字數
// mb-strlen (   ,'xxx'), 空位是要查的字句, xxx 是要查字句的編碼, utf-8 是中文。

//substr(變數,starPoint,要拿幾多個字)可以CUT字, starPoint 和 要拿幾多個字 都必須是數字。FOR 英文字。
//mb_substr(變數,starPoint,要拿幾多個字,"xxx")starPoint 和 要拿幾多個字 都必須是數字, xxx 是要查字句的編碼, utf-8 是中文。


?>