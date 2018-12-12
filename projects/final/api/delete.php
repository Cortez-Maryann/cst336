<?php
header('Access-Control-Allow-Origin: *');
include '../../../inc/dbConnection.php';
$dbConn = startConnection("fansite");

$sql = "DELETE FROM blogs
        WHERE blogId =:blogId";

$parameters = array();
$parameters[":blogId"]=$_GET["blogId"];

$stmt = $dbConn->prepare($sql);
$stmt->execute($parameters);


?>