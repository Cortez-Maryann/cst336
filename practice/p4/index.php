<?php>


function play(){

    $suit_chosen = $_POST['chosen_suit'];
    $row = $_POST['rows'];
    $column = $_POST['columns'];
    $suits = arr("hearts", "spades", "diamonds", "clubs");
    $cardsUsed = array();
    
    $randomCard;
    for($i = 0; $i < $row*$column; $i++){
        if($i%($row - 1) == 0){
            echo "<br>";
        }
        do{
            do{
                $randomSuit = rand($suits);
            }while($randomSuit==$suit_chosen);
            $random_card = rand(1,13);
        }while(!array_key_exists ($randomSuit + $random_card , $cardsUsed)){
            $cardsUsed[] = $randomSuit + $random_card;
            echo "<td><img src = " . $randomSuit . "/" . $random_card . ".png><td>";
        }
    
    // while($i < $row){
    //     $rand_suit = array_rand($suits);
    //     while($ii < $column){
    //         $rand_card = $rand_suits . "/" .rand(1,13);
            
        
    
    
    }
}




?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Aces vs Kings</h1>
        <div id = "table">
            <?php play(); ?>
        </div>
        Number of Rows:<input type="text" name="rows"><br>
        Number of Columns:<input type="text" name="columns">
        <br>
        Suit to omit
        <select name = "chosen_suit">
          <option value="clubs">Clubs</option>
          <option value="diamonds">Diamonds</option>
          <option value="hearts">Hearts</option>
          <option value="spades">Spades</option>
        </select>
        <input type="submit">
    </body>
</html>