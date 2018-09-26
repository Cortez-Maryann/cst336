<?php
    function randomQuote(){
        $quotes = array("This is boring, I’m otter here.", 
           "I feel like we're drifting apart, I think it's time we sea otter people.",
            "You are my significant otter.",
            "That's otter nonsense.",
            "I love you like no otter.",
            "You otter be ashamed of yourself!",
            "You are otter this world!",
            "Awww, get otter here",
            "They're otter-ly adorable", 
            "What if I say I'm not like the otters?");
            
            $r = rand(0,10);
            if($r%2 > 0){
                echo "I love puns! Enjoy these puns. <br/><br/>";
            }
            else{
               echo "Puns are lame, just look at these! <br/><br/>";
            }
        
        for($i = 0; $i < 2; $i++){
            $r = rand(0,10);
            echo $quotes[$r];
            echo "<br/>";
        }
    }
    
    function randomImage(){
        return "img/" . rand(1,5) . ".png";
    }
    
    function displayImages(){
        for($i = 0; $i < 5; $i++){
            echo "<img src= " . randomImage() . " alt=pic/>";
        }
    }
    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Homework 2: Pun Generator</title>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
        
    </head>
    <body>
        <header><h1><?php randomQuote() ?></h1></header>
        <a href="index.php"><button>Refresh</button></a>
        <br/>
        <br/>
        <br/>
        <br/>
     <div>
         
         <?php displayImages() ?>
         
     </div>
     
     <footer>
            <hr>
            CST336. 2018&copy; Cortez <br />
            <strong>Homework 2</strong><br />
            <br />
            <img id = "foot" src="../../img/logo.png" alt="CSUMB logo">
            
    </footer>
     
    </body>
    
    
</html>