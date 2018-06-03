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
<script type="text/javascript">
	function add()
	{
		document.getElementById('added').innerHTML = "Added";
	}

</script>
    <body>
<?php include ("components/navigation.php"); ?>
        <div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <img style="max-width:100%;"src="<?php echo $product['image'];  ?>" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3><?php echo $product['productname']; ?></h3>    
                    <h5 style="color:#337ab7">Rank <a href="#"><small style="color:#337ab7">(5054 ventas)</small></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>Price/small</h6>
                    <h3 style="margin-top:0px;">$<?php echo $product['listprice']; ?></h3>
                      
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">				
                        <a onclick="add()" href="index.php?action=addToCart&product_id=<?php echo $product['productID']; ?>" 
						class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                        <h6><a href="#" >
						<span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;">
						</span> Add to wish list</a></h6>
                    </div>                                        
                </div>                              
        
                <div class="col-xs-9">
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
							<?php echo $product['productinfo']; ?>
                        </p>
                        <small>
                            <ul>
                                <li>Super AMOLED capacitive touchscreen display with 16M colors</li>
                                <li>Available on GSM, AT T, T-Mobile and other carriers</li>
                                <li>Compatible with GSM 850 / 900 / 1800; HSDPA 850 / 1900 / 2100 LTE; 700 MHz Class 17 / 1700 / 2100 networks</li>
                                <li>MicroUSB and USB connectivity</li>
                            </ul>  
                        </small>
                    </div>
                </div>		
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
