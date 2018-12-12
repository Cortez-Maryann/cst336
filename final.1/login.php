<!DOCTYPE html>
<html>
    <head>
        <title> Login </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <script>
            $("document").ready(function() {
                
                $("button").click(function() {
                    $.ajax({

                    type: "GET",
                    url: "api/checkLogin.php",
                    dataType: "json",
                    data: { "username": $("#username").val(), 
                            "password": $("#password").val()},
                    success: function(data, status) {
                        if(!data) {
                            $("#error").html("Incorrect username and/or password.");
                             $("#error").css("color", "red");
                        } else {
                            if(data.adminUser == 1){
                                window.location = "admin.php";
                            } else{
                                window.location = "index.php"; 
                            }
                        }
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
          <a class="navbar-brand" href="#">OP DETONATORS</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link disabled" href="#">Home</a>
              <a class="nav-link disabled" href="#">About</a>
              <a class="nav-item nav-link active" href="#">Login <span class="sr-only">(current)</span></a>
            </div>
          </div>
        </nav>
        
        <center>
            
            <br><br>
            <h5>You can access the site with the username: user1 and the password: password.</h5>
            <br><br>
            <h1>Login</h1><br>
            Enter your username:<br>
            <input type="text" name="username" id="username"><br><br>
            
            Enter your password:<br>
            <input type="password" name="password" id="password"><br><br>
            
            <button type="button" class="btn btn-outline-primary">Login</button>
            <br><br>
            <h4 id="error"></h4>
        </center>

    </body>
</html>