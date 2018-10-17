<?php

include '../../inc/dbConnection.php';
$dbConn = startConnection("ottermart");

function displayCategories() { 
    global $dbConn;
    
    $sql = "SELECT * FROM om_category ORDER BY catName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($records);
    //echo "<hr>";
    //echo $records[2] . "<br>";
    //echo $records[1]['catDescription'] . "<br>";
    
    foreach ($records as $record) {
        echo "<option value='".$record['catId']."'>" . $record['catName'] . "</option>";
    }
}

function filterProducts() {
    global $dbConn;
    
    $namedParameters = array();
    $product = $_GET['productName'];
    
    //This SQL works but it doesn't prevent SQL INJECTION (due to the single quotes)
    //$sql = "SELECT * FROM om_product
    //        WHERE productName LIKE '%$product%'";
    

    $sql = "SELECT * FROM om_product WHERE 1"; //Gettting all records from database
    
    if (!empty($product)){
        //This SQL prevents SQL INJECTION by using a named parameter
         $sql +=  " AND productName LIKE :product";
         $namedParameters[':product'] = "%$product%";
    }
    
    if (!empty($_GET['category'])){
        //This SQL prevents SQL INJECTION by using a named parameter
         $sql .=  " AND catId =  :category";
          $namedParameters[':category'] = $_GET['category'] ;

    }
    
    if (!empty($_GET['priceFrom']) &&){
        //This SQL prevents SQL INJECTION by using a named parameter
         $sql .=  " AND price >=  :priceFrom";
          $namedParameters[':priceFrom'] = $_GET['priceFrom'] ;

    }
    
    if (isset($_GET['orderBy'])) {
        
        if ($_GET['orderBy'] == "productPrice") {
            
            $sql .= " ORDER BY price";
        } else {
            
              $sql .= " ORDER BY productName";
        }
        
        
    }


    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);  
    print_r($records);


}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 6: Ottermart Product Search</title>
        
        <style>
            body {
                text-align:center;
            }
            
            
        </style>
    </head>
    <body>
        
        <h1> Ottermart Product Search </h1>
        
        <form>
            
            Product: <input type="text" name="productName" placeholder="Product keyword" /> <br />
            
            Category: 
            <select name="category">
               <option value=""> Select one </option>  
               <?=displayCategories()?>
            </select>
            
            <br />
            
            Price: 
            Price: From: <input type="text" name="priceFrom"  /> 
            To: <input type="text" name="priceTo"  />
            
            <br />
            
            Order result by:
            <input type="radio" name= "orderBy" value="productPrice"> Price
            <input type="radio" name= "orderBy" value="productName"> Name
            
            <br />
            
            <input type="submit" name="submit" value="Search!"/>
            <br />
            
            
            
        </form>
        
        
        <?= filterProducts() ?>

    </body>
</html>