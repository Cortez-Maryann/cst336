<?php
include '../../inc/dbConnection.php';
$dbConn = startConnection("fansite");

function getAwards() {
    global $dbConn;
    $sql = "SELECT * FROM awards ORDER BY awardName ASC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($record as $records) {
      echo $records["awardName"];
       echo " <strong>Date:</strong>". $records["awardDate"] ."<br>";
    }
}

function getGames() {
    global $dbConn;
    $sql = "SELECT * FROM games ORDER BY gameName ASC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($record as $records) {
       echo "<strong>". $records["gameName"] ."</strong><br>";
    }
}


?>



<!DOCTYPE html>
<html>
    <head>
        <title> About </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            .fa {
              padding: 20px;
              font-size: 30px;
              width: 50px;
              text-align: center;
              text-decoration: none;
              margin: 5px 2px;
            }
            
            .fa:hover {
                opacity: 0.7;
            }

            
            .fa-twitter {
              background: #55ACEE;
              color: white;
            }

            .fa-instagram {
              background: #125688;
              color: white;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">OP DETONATORS</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="logout.php">Logout</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
        
        <center>
            <br><br>
            <h3>Welcome to a fan created site that helps support the streamer OP DETONATION!</h3><br><br>
            
            <h5>OP DETONATION's Social Media Accounts</h5><br>
            <div id="accounts">
                   <a href="https://www.youtube.com/channel/UCtNTh8TAafgXUuYoEfv4JEw?">
                      <img src="img/sub.jpg" alt="Youtube Link" style="width:180px;">
                    </a> 
                    <a href="https://www.twitch.tv/opdetonation">
                      <img src="img/follow.jpg" alt="Twitch Link" style="height:42px;">
                    </a>
                    <a href="https://twitter.com/cortez_maryann?lang=en">
                      <img src="img/twitter.jpg" alt="Twitter Link" style="height:42px;">
                    </a>
                    <a href="https://www.instagram.com/cortez_maryann/?hl=en">
                      <img src="img/insta.jpg" alt="Instagram Link" style="height:42px;"><br><br>
                    </a>
            </div><br><br>
            
            <h5>List of Awards won by OP DETONATION</h5>
            <div id="awards">
                <?php getAwards(); ?>
            </div><br><br><br>
            
            <h5>List of Games Played by OP DETONATION</h5>
            <div id="games">
                <?php getGames(); ?>
            </div>
        </center>

    </body>
</html>