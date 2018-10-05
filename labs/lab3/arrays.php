<?php 


    function displayArray($symbols){
        echo "<hr>";
        print_r($symbols);
        for($i = 0; $i < count($symbols); $i++){
            if($i == count($symbols) - 1){
                echo $symbols[$i];
            }
            
            else{
                echo $symbols[$i] . ", ";
            }
        }
    }

    $symbols = array("seven");
    print_r($symbols); //displays array content
    
    $points = array("orange" => 250, "cherry" => 500, "seven" => 1000);
    
    
    
    array_push($symbols,"orange"); //adds element(s) to end of array
    print_r($symbols); //displays array content
    $symbols[] = "cherry"; //adds element to end of array
    print_r($symbols);//displays array content
    
    
   // displayArray($symbols);
    
    //sort($symbols);
    //displayArray($symbols);
    
    //rsort($symbols);
    //displayArray($symbols);
    
    //unset($symbols[2]); //removing an element by index
    //displayArray($symbols);
    
   // $symbols = array_values($symbols); //re-indexes elements in array
    //displayArray($symbols);
    
    //shuffle($symbols);
    //displayArray($symbols);
    
    //echo "<hr>";
    
    //echo "Random item: " . $symbols[rand(0,count($symbols)-1)];
    
    echo "<hr>";
    
    $indexes = array();
    
    for($i =0; $i <3; $i++){
        $indexes[] = $symbols[array_rand($symbols)];
        echo "<img src='../lab2/img/" . $indexes[$i] . ".png'>";
        
        
    } 
    
    echo "<hr>";
    print_r($indexes);
    
    if($indexes[0] == $indexes[1] && $indexes[1] == $indexes[2]){
        echo "Congrats!! You won " . $points[$symbols[$indexes[0]]] . "points";
    }
    
    
    
    
    
    




?>


<!DOCTYPE html>
<html>
    <head>
        <title> Review: Arrays </title>
    </head>
    <body>

    </body>
</html>