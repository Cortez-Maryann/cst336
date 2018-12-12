<?php
header('Access-Control-Allow-Origin: *');
include '../../../inc/dbConnection.php';
$dbConn = startConnection("fansite");


$sql = "SELECT adminUser FROM users WHERE username =:username AND password =:password";

$parameters = array();
$parameters[":username"]=$_GET["username"];
$parameters[":password"]=$_GET["password"];

$stmt = $dbConn->prepare($sql);
$stmt->execute($parameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);


echo json_encode($record);

?>