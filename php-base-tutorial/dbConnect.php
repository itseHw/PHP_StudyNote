<!-- 用來連接DataBase -->

<?php
$dbConnection = mysqli_connect("資料庫位置","USERNAME","PASSWORD","DBName");

//check connent is ok or not
if(mysqli_connect_errno()){ //build in function for php test connect mysql have error or not
    echo "Failed to connent MYSQL: " . mysqli_connect_error();
    exit();

}

echo "Successful connect!";


//Setting for can show the Chinese
mysqli_set_charset($dbConnection, "utf8");

?>