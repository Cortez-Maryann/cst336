<?php

    function displayScore(){
        
        $score = 0;
        if(!isset($_GET['question1']) && !isset($_GET['question2']) && !isset($_GET['question3']) && !isset($_GET['question4a']) && !isset($_GET['question4b']) && !isset($_GET['question4c']) && !isset($_GET['question4d']) && !isset($_GET['question5']));
        
        else{
            if($_GET['question1'] == "c" ){
            $score++;
            }
            
            if($_GET['question2'] == "a"){
                $score++;
            }
            
            if($_GET['question3'] == "b"){
                $score++;
            }
            
            if($_GET['question4a'] == "a" && $_GET['question4b'] == "b" && $_GET['question4d'] == "d" && $_GET['question4c'] == ""){
                $score++;
            }
            if($_GET['question5'] == "b"){
                $score++;
    
            }
            if($_GET['question6'] == "a"){
                $score++;

            }
            echo $_GET['first'] . " " . $_GET['last'] . " you earned a score of " . $score . "/6.";
        }
            
    }

    
    function q1(){

        if(!isset($_GET['question1'])){
            echo "<strong>Enter an Answer</strong>";
        }
        else if($_GET['question1'] == "c"){
            echo "<div class='green'>Correct Answer</div>";

        }
        else {
            echo "<div class='red'>Wrong Answer</div>";
        }
    }
    
    function q2(){

        if(!isset($_GET['question2'])){
            echo "<strong>Enter an Answer</strong>";
        }
        else if($_GET['question2'] == "a"){
            echo "<div class='green'>Correct Answer</div>";

        }
        else {
            echo "<div class='red'>Wrong Answer</div>";
        }
    }
    
    function q3(){

        if(!isset($_GET['question3'])){
            echo "<strong>Enter an Answer</strong>";
        }
        else if($_GET['question3'] == "b"){
            echo "<div class='green'>Correct Answer</div>";

        }
        else {
            echo "<div class='red'>Wrong Answer</div>";
        }
    }
    
    function q4(){

        if($_GET['question4a'] == "" && $_GET['question4b'] == "" && $_GET['question4c'] == "" && $_GET['question4d'] == ""){
            echo "<strong>Enter an Answer</strong>";
        }
        else if($_GET['question4a'] == "a" && $_GET['question4b'] == "b" && $_GET['question4d'] == "d" && $_GET['question4c'] == ""){
            echo "<div class='green'>Correct Answer</div>";

        }
        else {
            echo "<div class='red'>Wrong Answer</div>";
        }
    }
    
    function q5(){

        if(!isset($_GET['question5'])){
            echo "<strong>Enter an Answer</strong>";
        }
        else if($_GET['question5'] == "b"){
            echo "<div class='green'>Correct Answer</div>";

        }
        else {
            echo "<div class='red'>Wrong Answer</div>";
        }
        
    }
    
    function q6(){

        if(!isset($_GET['question6'])){
            echo "<strong>Enter an Answer</strong>";
        }
        else if($_GET['question6'] == "a"){
            echo "<div class='green'>Correct Answer</div>";

        }
        else {
            echo "<div class='red'>Wrong Answer</div>";
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Homework 3 Midterm Practice Test </title>
        <link rel="stylesheet" href="css/styles.css" type="text/css">
    </head>
    
    <body>
        <header><h1>CST337 Practice Midterm</h1></header>
        
        <hr>
        
        <h3><strong><?= displayScore() ?></strong></h3>
        
        <form>

            <strong>Enter your name:</strong>
            
            <br /><br />
            
            
            First: <input type="text" name ="first" value="<?= $_GET['first']?>" /> 
            Last: <input type="text" name ="last" value="<?=$_GET['last']?>"/>
            
            <br /><br />
            
            <strong>Answer the following questions to the best of your ability.</strong>
            
            <br /><br />

            
            <fieldset>
                
                Choose the correct variable name. <br />
                
                <input type="radio" name="question1" value="a"  
               <?= ($_GET['question1'] == "a")?" checked":"" ?> > $10ten <br />
               
               <input type="radio" name="question1" value="b"  
               <?= ($_GET['question1'] == "b")?" checked":"" ?> > $ten-10 <br />
               
               <input type="radio" name="question1" value="c"  
               <?= ($_GET['question1'] == "c")?" checked":"" ?> > $ten10 <br />
                
            </fieldset>
            
            <?= q1() ?>
            
            <fieldset>
                
                How do you concatenate php with html? <br />
                
                <input type="radio" name="question2" value="a"  
               <?= ($_GET['question2'] == "a")?" checked":"" ?> > . (dot) <br />
               
               <input type="radio" name="question2" value="b"  
               <?= ($_GET['question2'] == "b")?" checked":"" ?> > + (plus) <br />
               
               <input type="radio" name="question2" value="c"  
               <?= ($_GET['question2'] == "c")?" checked":"" ?> > _ (underscore) <br />
                
            </fieldset>
            
            <?= q2() ?>
            
            <fieldset>
                
            What are the correct tags to use for php? <br />
                
                <input type="radio" name="question3" value="a"  
               <?= ($_GET['question3'] == "a")?" checked":"" ?> > <=? php> <br />
               
               <input type="radio" name="question3" value="b"  
               <?= ($_GET['question3'] == "b")?" checked":"" ?> > < ?php ?> <br />
               
               <input type="radio" name="question3" value="c"  
               <?= ($_GET['question3'] == "c")?" checked":"" ?> > < php => <br />
                
                
            </fieldset>
            
            <?= q3() ?>
            
            <fieldset>
                
                Select the true statement(s) for php? <br />
                
                <input type="checkbox" name="question4a" value="a"  
               <?= ($_GET['question4a'] == "a")?" checked":"" ?> > PHP is an object-oriented programming language. <br />
               
               <input type="checkbox" name="question4b" value="b"  
               <?= ($_GET['question4b'] == "b")?" checked":"" ?> > PHP can be used within a html script. <br />
               
               <input type="checkbox" name="question4c" value="c"  
               <?= ($_GET['question4c'] == "c")?" checked":"" ?> > You can use PHP without HTML. <br />
               
               <input type="checkbox" name="question4d" value="d"  
               <?= ($_GET['question4d'] == "d")?" checked":"" ?> > It is a server-side, cross platform language <br />
                
            </fieldset>
            
            <?= q4() ?>
            
            <fieldset>
                
                Keywords are case-sensitive in PHP. <br />
                
                <input type="radio" name="question5" value="a"  
               <?= ($_GET['question5'] == "a")?" checked":"" ?> > True <br />
               
               <input type="radio" name="question5" value="b"  
               <?= ($_GET['question5'] == "b")?" checked":"" ?> > False <br />
                
            </fieldset>
            
            <?= q5() ?>
            
            <fieldset>
                What is HTML? <br />
                
                <input type="radio" name="question6" value="a"  
               <?= ($_GET['question6'] == "a")?" checked":"" ?> > Markup Language <br />
               
               <input type="radio" name="question6" value="b"  
               <?= ($_GET['question6'] == "b")?" checked":"" ?> > Object-oriented programming language <br />
               
               <input type="radio" name="question6" value="c"  
               <?= ($_GET['question6'] == "c")?" checked":"" ?> > A server <br />
                
            </fieldset>
            
            <?= q6() ?>
            
            <br />
            
            <input type="submit" value ="Submit" class="button" /> 
            
        </form>
        
        <footer>
            <hr>
            CST336. 2018&copy; Cortez <br />
            <strong>Homework 3</strong><br />
            <br />
            <img id = "foot" src="../../img/logo.png" alt="CSUMB logo">
            
    </footer>
        
        
        

    </body>
</html>