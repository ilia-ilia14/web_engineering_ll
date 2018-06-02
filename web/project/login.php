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
<style>
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
    <body>
<?php include ("components/navigation.php"); ?>
       <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Please sign in<small> And shop with us</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" class="login" method="post" action=".">
			    			<div class="form-group">
			    				<input type="email" name="username"  id="username" class="form-control input-sm" placeholder="Email Address" required="required">
			    			</div>
			    			<div class="form-group">
			    				<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required="required">
			    			</div>
			    			
			    			<input type="submit" name="action" value="login" class="btn btn-info btn-block">
							<b style="text-align:center; font-size:12px; color:red;"><?php if(!empty($error)) { echo $error; } ?></b>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>      
    </body>
	
</script>
</html>
