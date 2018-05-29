<?php
if(!isset($_SESSION))
{
	session_start();
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    <body>
	<?php include "navbar.php"; ?>
        <div class="container">
        	<div class="row">
               <div class="col-xs-4 item-photo">
                    <img style="max-width:100%;" src="<?php echo $product['image']; ?>" />
                </div>
                <div class="col-xs-5" style="border:0px solid gray">
                    <!-- Datos del vendedor y titulo del producto -->
                    <h3><?php echo $product['name']; ?></h3>    
                    <h5 style="color:#337ab7">Rank <a href="#"><small style="color:#337ab7">(5054 ventas)</small></h5>
        
                    <!-- Precios -->
                    <h6 class="title-price"><small>Price/small</h6>
                    <h3 style="margin-top:0px;">$<?php echo $product['price']; ?></h3>
                      
        
                    <!-- Botones de compra -->
                    <div class="section" style="padding-bottom:20px;">
                        <a href="index.php?action=add&name=<?php echo $product['name']."&price=".$product['price']."&picture=".$product['picture']."&description=".$product['description']."&id=".$product['categoryid']; ?>"
						class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Add to Cart</a>
                        <h6><a href="#" >
						<span class="glyphicon glyphicon-heart-empty" style="cursor:pointer;">
						</span> Add to wish list</a></h6>
                    </div>                                        
                </div>                              
        
                <div class="col-xs-9">
                    <div style="width:100%;border-top:1px solid silver">
                        <p style="padding:15px;">
                            <small>
							<?php echo $product['description']; ?>
                            </small>
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
