<?php
if(!isset($_SESSION))
{
  session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>.html</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>


<body background="white">

<div class="container">


<h2> Your Shopping Cart</h2>
<h4 style="text-align:right; "><a href="products.php"> HOME PAGE </a></h4>
<main>
 <!--loop goies here -->
<div class="error-pages">
<legend> Cart Items </legend>
  <?php if (empty($cart)) : ?>
    <p>There are no items in your cart.</p>
	
	
	

	
  <?php else: ?>

  <?php
	$size = sizeof($_SESSION['Cart']);
	$total = NULL;
	for($i = 0; $i<$size;$i++){ 
	$product = array();
	$product= $_SESSION['Cart'][$i]; // var_dump($product);
	for($j=0; $j<sizeof($product); $j++) { 
	$total += $product[$j][2];
	?>
			<div class="container">
				<table class="table table-striped table-bordered">
					<thead>
					  <tr>
						<th>Image</th>
						<th>Item</th>
						<th>Cost</th>

					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td><img src="<?php echo "images/".$product[$j][0]; ?>"  height="42" width="42"/></td>
						<td><?php echo $product[$j][1]; ?></td>
						<td>$<?php echo $product[$j][2]; ?></td>

					  </tr>
					  <tr>
						
					  </tr>
					</tbody>
				  </table>
			</div>


	
         
	<?php } } ?>
	<table class="table table-striped table-bordered">
	<th>Total Cost</th>
	<th>|</th>
  <th><?php echo $total; ?></th>
  </table>
  	
	<a class="btn btn-primary" href="index.php?action=delete">Delete cart</a>
	<a class="btn btn-primary" href="index.php?action=order&total=<?php echo $total; ?>">Place Order</a>
  <?php endif; ?>
</div>




</main>
 </div>
</body>
</html>