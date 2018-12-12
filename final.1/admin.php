<?php
include '../inc/dbConnection.php';
$dbConn = startConnection("fansite");

function usertotal() {
    global $dbConn;
    $sql = "SELECT COUNT(userId) FROM users";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<strong>" . $record["COUNT(userId)"] . "</strong>";
}

function postTotal(){
    global $dbConn;
    $sql = "SELECT COUNT(blogId) FROM blogs";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<strong>" . $record["COUNT(blogId)"] . "</strong>";
}

function mostLike(){
    global $dbConn;
    $sql = "SELECT text FROM blogs ORDER BY likes DESC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    echo $record["text"] . " ";
    
    $sql = "SELECT likes FROM blogs ORDER BY likes DESC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<strong>" . $record["likes"] . " Likes.</strong>";
}

function getReports() {
    global $dbConn;
    $sql = "SELECT * FROM blogs WHERE reports > 0";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($record as $records) {
        echo "<div class='input-group'>";
        echo "<div class='input-group-prepend'>";
        echo "<span class='input-group-text'> <img src='img/". $records["userId"] . ".jpg' height='50' width='50'> </span>";
        echo "</div>";
        echo "<textarea class='form-control' aria-label='With textarea' disabled>". $records["text"] ."</textarea>";
        echo "<button type='button' class='btn btn-outline-primary' id='". $records["blogId"] ."'>Delete</button>";
        echo "</div>";
	    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            .input-group {
               padding-left:20em;
               padding-right:20em;
               padding-top:2em;
               padding-bottom:3em;
            }
            .text {
                font-size:25px;
                padding-right:2em;
            }
        </style>
        
        <script>
            $("document").ready(function() {
                
                $("button").click(function() {
                    var info = 'blogId=' + this.id;
                    //alert(info);
                    $.ajax({
                        
                    type: "GET",
                    url: "api/delete.php",
                    dataType: "json",
                    data: info,
                    success: function(data, status) {
                        
                        
                    },
                    complete: function(data, status) { //optional, used for debugging purposes
                        //alert(status);
                    }

                    }); //ajax
                }); //button
        }); //documentReady
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">OP DETONATORS</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="admin.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
        <center>
            <br><br>
            <h1>Records</h1>
            <br><br>
            
            <h5>Total users: </h5><span id="users"><?php userTotal() ?></span><br><br>
            <h5>Total posts: </h5><span id="posts"><?php postTotal() ?></span><br><br>
            <h5>Most liked post: </h5><span id="likedPost"><?php mostLike() ?></span><br><br><br><br>
            <h1>Reports</h1><br>
            <div id="reports"></div>
            <span id="likedPost"><?php getReports() ?></span>
        </center>
        

    </body>
</html>