<?php
    
    function displayMonths(){
        echo "<option name= 'month'>Select </option>";
        echo "<option name= 'month'>November</option>";
        echo "<option name= 'month'>December</option>";
        echo "<option name= 'month'>Janurary</option>";
        echo "<option name= 'month'>Feburary</option>";
    }
    
    function displayCountries(){
        echo "<option name= 'country'>Select </option>";
        echo "<option name= 'country'>USA</option>";
        echo "<option name= 'country'>Mexico</option>";
        echo "<option name= 'country'>France</option>";
    }
    
    $itinerary = array();
    
    class Itinerary {
        public $month;
        public $country;
        public $order;
        public $places;
        
        function __construct($w, $x, $y, $z){
            $month = $w;
            $country = $x;
            $order = $y;
            $places = $z;
        }
        
    }


    function addToItiterary(){
         global $itinerary;
         $temp = Itinerary($_GET['month'], $_GET['country'], $_GET['order'], $_GET['location']);
         $itinerary[] = $temp;
         
    }
    
    function printer(){
        global $itinerary;
        printr($itinerary);
    }

    function displayTable(){
        $numOfDays;
        if($_GET['month'] == "Feburary"){
            $numOfDays = 28;
        }
        else if($_GET['month'] == "Janurary" || $_GET['month'] == "December"){
            $numOfDays = 31;
        }
        else {
            $numOfDays = 30;
        }
        
        
        echo "<table>";
        for($i = 1; $i < $days; $i++) {
            if($i = 1){
                echo "<tr>";
            }
            else if($i%7 == 0){
              echo "</tr><tr>";   
            }
            
            echo "<td>" . $i . "</td>";
       
        }
        echo "</table>";
        
        
    }




?>

<!DOCTYPE html>
<html>
    <head>
        <title>Winter Vacation Planner</title>
        
        <style>
            
            body {
                
                text-align:center;
                
                
            }
            
            
        </style>
        
        
    </head>
    <body>
        <header><h1>Winter Vacation Planner</h1></header>
        
        <form>
            Select Month: 
            <select>
                <?php displayMonths() ?>

            </select>
            
            <br><br>
            Number of Locations: 
            
            <input type="radio" name= "location" value= "3"> Three
            <input type="radio" name= "location" value= "4"> Four
            <input type="radio" name= "location" value= "5"> Five
            
            <br><br>
            
            Select Country: 
            <select>
                <?php displayCountries() ?>

            </select>
            
            <br><br>
            
            Visit locations in alphabetical order: 
            
            <input type="radio" name= "order"> A-Z
            <input type="radio" name= "order"> Z-A
            
            <br><br>


            <input type="submit" value="Create Itinerary">

            <?php 
             addToItiterary();
            
            printer();
            
            displayTable();
            
            
            
            ?>
            
            

            
            
            
            
            
            
            
            
            
            
        </form>

    </body>
</html>