<?php
header('Access-Control-Allow-Origin: *');
include 'dbConnection.php';
$dbConn = startConnection("c9");


if ($_GET["answer"] == "yes"){
    $sql = "UPDATE poll
            SET Yes = Yes + 1
            WHERE question = 1";
            
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
}

if($_GET["answer"] == "no"){
    $sql = "UPDATE poll
            SET No = No + 1
            WHERE question = 1";
            
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
}else{
    $sql = "UPDATE poll
            SET Maybe = Maybe + 1
            WHERE question = 1";
            
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
}


?>