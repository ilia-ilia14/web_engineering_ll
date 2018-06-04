<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link style="text/css" rel="stylesheet" href="css/styles.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include ("components/navigation.php");
?>
<div class="container">
<div class="col-md-12" >
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:100%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner"  >

      <div class="item active">
        <img src="images/gym.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <p>Train with us</p>
        </div>
      </div>

      <div class="item">
        <img src="images/run.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <p>Get healthy</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/kayak.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <p>We love the Big Apple!</p>
        </div>
      </div>
  
    </div>

     <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
  
  <div class="col-md-12 sectioning" >
	<div class="col-md-4">
		<h4 align="center"> our equipments </h4>
		<div class="frame">
		<a href="equipments.html"><img src="images/equip5.jpg" width="90%"/> </a>
		</div>
		<hr />
		<h4 align="center">our trainers </h4>
		<div class="frame">
		<a href="index.php?action=trainersPage"><img src="images/personal-trainer.jpg" width="90%"/> </a>
		</div>
		<hr />
 </div>
	
	<div class="col-md-4">
		<a href="benefit.html">
	<h4 align="center"> benefits of regular physical activity </h4>
	<img src="images/exercise.jpg" width="90%"/> </a>
	<p id="purpose"> Want to feel better, have more energy and perhaps even live longer? Look no further than exercise. 
	The health benefits of regular exercise and physical activity are hard to ignore. And the benefits of exercise are yours for the taking,
	regardless of your age, sex or physical ability. Need more convincing to exercise? Check out these seven ways exercise can improve your life. </p>
	</div>
	
	<div class="col-md-4">
		<h4 align="center"> virtual tour </h4>
		<div class="vidframe">
		<iframe width="350" height="290"
		src="http://www.youtube.com/embed/XGSy3_Czz8k">
		</iframe>
		</div>
		<p align="center"><a href="#"> more videos </a> </p>
		<hr />

		<h4 align="center"> success stories </h4>
		<div class="frame">
		<a href="success.html"> <img src="images/success.jpg" /> </a>
		</div>
		<hr />
	</div>
 
  </div>
 <?php 
 include ("components/footer.php");
 ?>
</div>

</body>
</html>




















