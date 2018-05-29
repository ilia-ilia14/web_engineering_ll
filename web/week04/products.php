<?php
if(!isset($_SESSION))
{
	session_start();
}
?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php include "navbar.php"; ?>
<body>

<div class="container">


 <?php   foreach ($products as $product) : ?>
 <?php var_dump($product); ?>
<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="<?php echo $product['Image']; ?>" class="img-responsive"> 
						<span class="tag2 hot">
							HOT
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								<?php echo $product['Name']; ?>
							</a>
							<a href="#">
								<span>	Computers</span>
							</a>                            

						</h5>
						<p class="price-container">
							<span><?php echo "$". $product['Price']; ?></span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p><?php echo $product['Description']; ?></p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
                            <a href="index.php?action=product&id=<?php echo $product['categoryID']; ?>"
							class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>
<?php endforeach; ?>
<!--
<div class="col-xs-12 col-md-6">
	
	<form class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/Dell_XPS.jpg" alt="194x228" class="img-responsive"> 
						<span class="tag2 hot">
							HOT
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Dell XPS<span>Computers</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$399</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>13 i5 2.3GHz 8GB RAM 128GB SSD Win 10 </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
                            <a href="control.php?action=product&name=Dell XPS&description=13 i5 2.3GHz 8GB RAM 128GB SSD Win 10&price=399&pic=Dell_XPS.jpg"
							class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="col-xs-12 col-md-6">

	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/Asus P2540UA-AB51.jpg" alt="194x228" class="img-responsive"> 
						<span class="tag3 special">
							Special
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								 Asus P2540UA-AB51 <span>Computers</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$299</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>15.6" i5-7200U 2.5GHz 8GB 1TB Win 10</p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
                              <a href="control.php?action=product&name=Asus P2540UA-AB51&description=15.6 i5-7200U 2.5GHz 8GB 1TB Win 10&price=299&pic=Asus P2540UA-AB51.jpg"
							class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="col-xs-12 col-md-6">

	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/Asus ROG STRIX GL503VD.jpg" alt="194x228" class="img-responsive"> 
						<span class="tag2 sale">
							SALE
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Asus ROG STRIX GL503VD<span>Computers</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$1000</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>15.6,i7-7700HQ 16GB RAM 1TB SSD GTX1050 </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
                             <a href="control.php?action=product&name=Asus ROG STRIX GL503VD&description=15.6,i7-7700HQ 16GB RAM 1TB SSD GTX1050&price=1000&pic=Asus ROG STRIX GL503VD.jpg"
							class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



        
</div>


<div class="col-xs-12 col-md-6">

	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/Hewlett Packard 17-ap010nr Omen.jpg" alt="194x228" class="img-responsive"> 
						<span class="tag2 sale">
							SALE
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Hewlett Packard 17-ap010nr Omen  <span>Computers</span>
							</a>
						</h5>
						<p class="price-container">
							<span>$1200</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>17" Intel i7-7700HQ 16GB RAM  2LV57UA#AB </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
                            <a href="control.php?action=product&name=Hewlett Packard 17-ap010nr Omen&description=17 Intel i7-7700HQ 16GB RAM&price=1200&pic=Hewlett Packard 17-ap010nr Omen.jpg"
							class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



        
</div>

<div class="col-xs-12 col-md-6">
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="images/Acer_predator.jpg" alt="194x228" class="img-responsive"> 
						<span class="tag2 sale">
							SALE
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								Acer Predator 15 G9-593-71EH <span>Computers/span>
							</a>
						</h5>
						<p class="price-container">
							<span>$1000</span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p>15" 1TB + 256GB,  i7 3.8GHz, 16GB NH.Q1ZAA.001 </p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
                            <a href="control.php?action=product&name=Acer Predator 15 G9-593-71EH&description=15 1TB + 256GB,  i7 3.8GHz, 16GB NH.Q1ZAA.001&price=1000&pic=Acer_predator.jpg"
							class="btn btn-info">More info</a>
						</div>
						<div class="col-md-12">
							<div class="rating">Rating:
								<label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
								<label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
								<label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 -->


        
</div>
</div>
</body>
<script type="text/javascript">

	function add(elem)
	{
		var id    = elem.id;
		console.log(id);
		document.getElementById(id).innerHTML = "Added";
	}

</script>
</html>

