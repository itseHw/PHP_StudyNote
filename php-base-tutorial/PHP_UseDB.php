<?php
    include 'dbConnect.php';
    //include_once 'dbConnect.php
    //可以CHECK 一次這頁入左未，未先再include


    $getDataFromDBQ1 = mysqli_query($dbConnection, "Select * FROM `tableName`");

    while ($dataGot = mysqli_fetch_assoc(getDataFromDBQ1)) {
        echo $dataGot['rowName']
    }


    $sql = "INSERT INTO `tableName`(`rowNmae`)VALUES ( '{$_POST['valueName']}')";


    if(mysqli_query($dbConnection, $sql)){
        //change to successful page
    }else{
        // change to unsuccessful page
    }

    //mysqli_query($dbConnection, $sql) can return true false for the sql is successful or not
?>