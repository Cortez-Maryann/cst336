<?php 



function printYears($startYear, $endYear){
    $sum = 0;
    $arr = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");
    $beg = 0;
    for($i = $startYear; $i <= $endYear; $i++){
        $sum += $i;
        echo "<th><li>Year " . $i. "<br>";
        if($i == 1776){
            //echo "<strong> USA INDEPENDENCE</strong>";
        }
        if($i%100 == 0){
           // echo "<strong> Happy New Century!</strong>";
        }
        if($i%7 == 0){
            echo "<tr>";
        }
        
        echo "<img src='img/" .$arr[$beg%12]. ".png'></th>";
        $beg++;
    }
    return $sum;
    
    
    
    
    
}





?>


<!DOCTYPE html>
<html>
    <head>
        <title>Chinese Zodiac List</title>
        
    </head>
    <body>
        
        <header><h1>Chinese Zodiac List</h1></header>
        <form>
            <h2>Number of Rows:</h2><input type="text" name="start">
            <h2>Number of columns:</h2><input type="text" name="end">
            <input type = "submit" name = "Submit">
        </form>
        
        <table>
            
            
            <?php 
            if($_GET['start'] == ""){
                
            }
            else{
                 echo "<h1><strong>Year Sum: " .printYears($_GET['start'], $_GET['end']) . "</strong></h1>";
            }
            
            
            ?>
            
        </table>

        

    </body>
</html>