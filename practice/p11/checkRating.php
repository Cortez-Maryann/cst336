<?php
    include '../../inc/dbConnection.php';
    $dbConn = startConnection("c9");
    
    $sql= " SELECT COUNT(rating)
            FROM ratings";
            
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC); 
    
    return $records;
?>