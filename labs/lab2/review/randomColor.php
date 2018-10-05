<?php
    
    function getLuckyNumber(){
        
        do {
            $lucky = rand(1,10);
            
        }
        
        while($lucky == 4);
        
        echo $lucky;
    }
    
    function getRandomColor(){
        echo "rgba(".rand(0,255).", ".rand(0,255).", ".rand(0,255).", ".(rand(0,10)/10).");";
    }
    
?>
    
<!DOCTYPE html>
<html>
    <head>
        <title>Random Colors & Numbers</title>
        
        <style>
            body {

                background-color: <?php getRandomColor(); ?>
            }
            
            h1 {
                
                background-color: <?php getRandomColor(); ?>
                
                color: <?php getRandomColor(); ?>
                
            }
            
        </style>
        
    </head>
    <body>
        
        <h1>
            My  lucky number is:
            
            <?php 
            
            getLuckyNumber();
            
            ?>
            
            </h1>
    </body>
</html>