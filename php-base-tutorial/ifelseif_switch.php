<?php
$price = 33

if($price >= 85){
    echo "expensive";
}elseif($price>50 &&$price<85){
    echo("OK to buy");
}else{
    echo ("cheap");
}

//switch

switch($price){
    case $price>=85:
        echo "expensive";
        break;

    case $price>50 &&$price<85:
        echo("OK to buy");
        break;
    
    default:
        echo ("cheap");
        break;

}


?>