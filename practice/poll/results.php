<?php
header('Access-Control-Allow-Origin: *');
include '../../inc/dbConnection.php';
$dbConn = startConnection("poll");

/*

$sql = "SELECT * FROM poll WHERE question = :question";

$parameters = array();
$parameters[":question"]=$_GET["question"];

$stmt = $dbConn->prepare($sql);
$stmt->execute($parameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);


echo json_encode($record);


*/

if ($_GET["answer"] == "yes"){
    $sql = "UPDATE poll
            SET Yes = Yes + 1
            WHERE question = 1";
            
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
}else if($_GET["answer"] == "no"){
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