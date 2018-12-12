<?php
header('Access-Control-Allow-Origin: *');
include '../../../inc/dbConnection.php';
$dbConn = startConnection("fansite");


$sql = "UPDATE blogs SET likes = likes + 1 WHERE blogId = :blogId ";

$parameters = array();
$parameters[":blogId"]=$_GET["blogId"];

$stmt = $dbConn->prepare($sql);
$stmt->execute($parameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);


?>