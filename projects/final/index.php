<?php
include '../../inc/dbConnection.php';
$dbConn = startConnection("fansite");

function getPosts() {
    global $dbConn;
    $sql = "SELECT * FROM blogs ORDER BY blogId DESC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($record as $records) {
        echo "<div class='input-group'>";
        echo "<div class='input-group-prepend'>";
        echo "<span class='input-group-text'> <img src='img/". $records["userId"] . ".jpg' height='50' width='50'> </span>";
        echo "</div>";
        echo "<textarea class='form-control' aria-label='With textarea' disabled>". $records["text"] ."</textarea>";
        echo "<button type='button' class='btn btn-outline-primary'>Like</button>";
        echo "<button type='button' class='btn btn-outline-primary'>Dislike</button>";
        echo "<button type='button' class='btn btn-outline-primary'>Report</button>";
        echo "</div>";
    }
}

function getPostsLike() {
    global $dbConn;
    $sql = "SELECT * FROM blogs ORDER BY likes DESC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($record as $records) {
        echo "<div class='input-group'>";
        echo "<div class='input-group-prepend'>";
        echo "<span class='input-group-text'> <img src='img/". $records["userId"] . ".jpg' height='50' width='50'> </span>";
        echo "</div>";
        echo "<textarea class='form-control' aria-label='With textarea' disabled>". $records["text"] ."</textarea>";
        echo "<button type='button' class='btn btn-outline-primary'>Like</button>";
        echo "<button type='button' class='btn btn-outline-primary'>Dislike</button>";
        echo "<button type='button' class='btn btn-outline-primary'>Report</button>";
        echo "</div>";
    }
}


?>


<!DOCTYPE html>
<html>
    <head>
        <title> Home </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            .input-group {
               padding-left:15em;
               padding-right:15em;
               padding-top:2em;
               padding-bottom:3em;
            }
            .text {
                font-size:25px;
                padding-right:2em;
            }
            #postsL {
                display: none;
            }
            #posts {
                display:inline;
            }
        </style>
        
        <script>
            $("document").ready(function() {
                $("#recent").click(function(){
                    $("#posts").show();
                    $("#postsL").hide();
                });//recent feed
                $("#likes").click(function(){
                    $("#posts").hide();
                    $("#postsL").show();
                });//likes feed
                
        }); //documentReady
        </script>
    </head>
    <body>
        <?php include 'inc/header.php'; ?>
        
        <center>
            <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">New Post</span>
          </div>
          <textarea class="form-control" aria-label="With textarea"></textarea> <button type="button" class="btn btn-outline-primary">Post!</button>
        </div>
        
        <span class="text">Sort Feed by</span>    
        
      <button id= "recent" type='button' class='btn btn-outline-primary'>Most Recent</button>
      <button id= "likes" type='button' class='btn btn-outline-primary'>Most Likes</button>
        
        <div id="posts">
            <?php getPosts() ?>
        </div>
        <div id="postsL">
            <?php getPostsLike() ?>
        </div>
        </center>

    </body>
</html>