<?php

include '../inc/dbConnection.php';
$dbConn = startConnection("midterm");


function filterPop() {
    global $dbConn;

    $sql = "SELECT * FROM mp_town WHERE population > 50000 AND population < 80000"; //Gettting all records from database


    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);  
    
    foreach ($records as $record) {
        
        echo $record['town_name'] . " " . $record['population'];
        echo "<br>";
    }
}

function orderPop(){
    
    global $dbConn;

    $sql = "SELECT * FROM mp_town ORDER BY population DESC"; 


    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);  
    
    foreach ($records as $record) {
        
        echo $record['town_name'] . " " . $record['population'];
        echo "<br>";
        
    }
    
}

function threeLeast(){
    global $dbConn;

    $sql = "SELECT * FROM mp_town ORDER BY population"; 


    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $i = 0;
    foreach ($records as $record) {
        if($i == 3)
            break;
        
        echo $record['town_name'] . " " . $record['population'];
        echo "<br>";
        $i++;
        
    }
    
}

function startsWithS(){
    global $dbConn;

    $sql = "SELECT * FROM mp_town WHERE town_name LIKE 's%'"; 

    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($records as $record) {
        
        echo $record['town_name'] . " " . $record['population'];
        echo "<br>";
        
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Midterm Practice 2</title>
    </head>
    <body>
        List all cities/towns that have a population between 50,000 and 80,000 <br><br> 
        <?= filterPop() ?> <br> <hr> <br>
        List all towns and population, ordered by population (from biggest to smallest) <br><br> 
        <?= orderPop() ?> <br> <hr> <br>
        List the three least populated towns<br><br>
        <?= threeLeast() ?> <br> <hr> <br>
        List the counties that start with the letter "S"<br><br>
        <?= startsWithS() ?> <br> <hr> <br>
        
        
        

    </body>
</html>