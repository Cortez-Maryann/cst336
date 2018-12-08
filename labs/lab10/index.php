<!DOCTYPE html>
<html>
    <head>
        <title> CSUMB: Pet Shelter </title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            body {
                text-align: center;
            }
            .carousel-inner {
                width:500px;
            }
            #carouselExampleControls {
                width:500px;
            }
        </style>
   
    </head>
    <body>
        
	  <?php 
	    include 'inc/header.php';
	    
	  ?>
        <!-- Display Carousel here  -->
    <center>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/alex.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/bear.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/carl.jpg" alt="Third slide">
            </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/charlie.jpg" alt="Fourth slide">
            </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/lion.jpg" alt="Fifth slide">
            </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/otter.jpg" alt="Sixth slide">
            </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/sally.jpg" alt="Seventh slide">
            </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/samantha.jpg" alt="Eigth slide">
            </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/ted.jpg" alt="Ninth slide">
            </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="img/tiger.jpg" alt="Tenth slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </center>
        
        <br><br>
        
        
        <a class="btn btn-outline-success" href="pets.php" role="button">Adopt Now</a>
        <br><br><br>
        <?php
        include 'inc/footer.php';
        
        ?>
        </body>

</html>