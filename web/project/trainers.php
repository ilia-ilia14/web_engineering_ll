<?php
if(!isset($_SESSION))
{
	session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/product_style.css">
   <link style="text/css" rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php include ("components/navigation.php"); ?>

<div class="container">
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/supernam.jpg" class="img-responsive"> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">TRAINING MANAGER - STIVE BERRET</h5>
				</div>
				<div class="description">
					<p> Training professional thrives in making maximum use of managerial and instructional 
					skills to identify, develop, and conduct unique training programs and organize high-end 
					professional courses.Develops efficient workforce and motivated employees 
					who can achieve maximum productivity for fast growing organizations.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/supernam.jpg" class="img-responsive"> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">TRAINER  - JOHN JACKSON</h5>
				</div>
				<div class="description">
					<p> Training Manager/ with 15+ years in training and course development: delivering training,
					designing and writing courses, leading teams of trainers, and directing enterprise initiatives.
					A proven track record of significant improvements in learning processes, productivity, quality,
					and customer satisfaction.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
        
</div>
</div>
</body>
</html>

