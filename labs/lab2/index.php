<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        
        
        <?php
        
        
        
            
        function displaySymbol($random_value){
            
        
            
            
            //$random_value = rand(0,2); //Generates a random number from 0 to 2
            
            
            // if($random_value == 0) {
            //     $symbol = "seven";
            // }
            
            // else if($random_value == 1){
            //     $symbol = "orange";
            // }
            
            // else {
            //     $symbol = "seven";
            // }
            
            }
        
        
            switch($random_value){
                case 0: echo "<img src= 'img/seven.png' alt= 'seven' title= 'Seven' width= '70px' />";                        
                        break;
                
                case 1: echo "<img src= 'img/lemon.png' alt= 'lemon' title= 'Lemon' width= '70px' />";
                        break;
                        
                case 2: echo "<img src= 'img/cherry.png' alt= 'cherry' title= 'Cherry' width= '70px' />";
                        break;
            }
            
            
        
            echo "<img src=\"img/$symbol.png\" alt=\"$symbol\" title=\"".ucfirst($symbol)."\"/>";
            
        //displaySymbol
        
        function displayPoints($random_value1, $random_value2, $random_value3){
            
            echo "<div id='output'>";
            if($random_value1 == $random_value2 && $random_value2 == $random_value3){
            
                switch($random_value1){
                
                    case 0: $totalPoints = 1000;
                            echo "<h1>Jackpot!</h1>";
                            break;
                        
                    case 1: $totalPoints = 250;
                            break;
                        
                    case 2: $totalPoints = 750;
                            break;

                }
                
                echo "<h2>You won $totalPoints points!</h2>";
            }
            
            else {
                echo "<h3> Try Again! </h3>";
            }
            
            echo "</div>";
        }
        
        $random_Value1;
        $random_Value2;
        $random_Value3;
        
        for($i=1; $i<4; $i++){
            ${"randomValue" . $i } = rand(0,2);
            displaySymbol(${"randomValue" . $i});
        }
        
        displayPoints($random_Value1, $random_Value2, $random_Value3);
        
        
        
        
        
        
        
        
        ?>
    

    </body>
</html>