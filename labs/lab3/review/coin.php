<?php

    session_start();
    //session_destroy();
    
    if(!isset($_SESSION['heads'])){
        $_SESSION['heads'] = 0;
        $_SESSION['tails'] = 0;
        $_SESSION['heads'] = 0;
        $_SESSION['tossHistory'] = array();
    }
    
    if(rand(0,1) == 0){
        $_SESSION['heads']++;
        $_SESSION['tossHistory'][] = "H ";
        print_r($_SESSION['tossHistory']);
    }
    else{
        $_SESSION['tails']++;
        $_SESSION['tossHistory'][] = "T ";
        print_r($_SESSION['tossHistory']);
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Coin flipping</title>
    </head>
    <body>
        <h2>Heads: <?= $_SESSION['heads'] ?> </h2>
        <h2>Tails: <?= $_SESSION['tails'] ?> </h2>

    </body>
</html>