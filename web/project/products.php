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
 <?php   foreach ($products as $product) : ?>

<div class="col-xs-12 col-md-6">
	<!-- First product box start here-->
	<div class="prod-info-main prod-wrap clearfix">
		<div class="row">
				<div class="col-md-5 col-sm-12 col-xs-12">
					<div class="product-image"> 
						<img src="<?php echo $product['image']; ?>" class="img-responsive"> 
						<span class="tag2 hot">
							HOT
						</span> 
					</div>
				</div>
				<div class="col-md-7 col-sm-12 col-xs-12">
				<div class="product-deatil">
						<h5 class="name">
							<a href="#">
								<?php echo $product['productname']; ?>
							</a>
							<a href="#">
								<span>Product code #<?php echo $product['productcode']; ?></span>
							</a>                            

						</h5>
						<p class="price-container">
							<span><?php echo "$". $product['listprice']; ?></span>
						</p>
						<span class="tag1"></span> 
				</div>
				<div class="description">
					<p> <?php echo substr($product['productinfo'], 0, 50); 
					?></p>
				</div>
				<div class="product-info smart-form">
					<div class="row">
						<div class="col-md-12"> 
                            <a href="index.php?action=viewProduct&id=<?php echo $product['productID']; ?>"
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

