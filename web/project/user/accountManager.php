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
<script type="text/javascript">
	$(document).ready(function(){
  var placeholder = null;
  $('input[type=text]').focus(function(){
    placeholder = $(this).attr("placeholder");
    $(this).attr("placeholder","");
  });
  $('input[type=text]').blur(function(){
    $(this).attr("placeholder", placeholder);
  });
});
</script>
    <body>
<?php include ("components/navigation.php"); ?>
       <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Edit Account </h3>
			 			</div>
			 			<div class="panel-body">
						<form id="reg-form" method="post" action="index.php">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="firstname" id="name1"  class="form-control input-sm" value="<?php echo $member['firstName']; ?>" />
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" id="name1" name="lastname"  class="form-control input-sm" value="<?php echo $member['lastName']; ?>" required />
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" id="email" name="email"  class="form-control input-sm" value="<?php echo $member['Email']; ?>" required />
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" id="password" name="password" required class="form-control input-sm" placeholder="Password" />
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" id="password-again" name="password1" required class="form-control input-sm" placeholder="Confirm Password" />
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="submit" value="Save" name="action" class="btn btn-info btn-block">
			    		
			    		</form>
						<b style="color:red;"> 
							<?php  if(!empty($error)) {
							foreach ( $error as $err ) : ?>
						   <?php echo $err."<br>"; ?>
							<?php endforeach; }?>
						</b>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>      
    </body>
	
</script>
</html>
