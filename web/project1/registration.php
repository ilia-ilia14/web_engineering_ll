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
<link style="text/css" rel="stylesheet" href="../css/indv-styles.css" />
<link style="text/css" rel="stylesheet" href="../css/reg-style.css" />
<title>dregister</title>

</head>
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
<?php include 'view/header.php'; ?>





<div id="reg-div" >



        <div class="register">
          <h3>Create Account</h3>
          <b style="color:red;"> 
            <?php  if(!empty($error)) {
            foreach ( $error as $err ) : ?>
           <?php echo $err."<br>"; ?>
        <?php endforeach; }?>
         </b>
          <form id="reg-form" method="post" action="index.php">
            <div>
              <label for="name">Firstname*</label>
              <input type="text" name="firstname" id="name1" required placeholder="Bob" <?php if(isset($firstname)){ echo "value='$firstname'";}  ?>/>
            </div>
            <div>
              <label for="name">Lastname*</label>
              <input type="text" id="name1" name="lastname" required placeholder="Jensen" <?php if(isset($lastname)){ echo "value='$lastname'";}  ?>/>
            </div>
            <div>
              <label for="email">Email*</label>
              <input type="text" id="email" name="email" required placeholder="sample@xyz.com" <?php if(isset($email)){ echo "value='$email'";}  ?>/>
            </div>
            <div>
              <label for="phone">Phone*</label>
              <input type="number" name="phone" required placeholder="2083283847" <?php if(isset($phone)){ echo "value='$phone'";}  ?>/>
            </div>
            <div>
              <label for="password">Password*</label>
              <input type="password" id="password" name="password" required/>
            </div>
            <div>
              <label for="password-again1">Password Again*</label>
              <input type="password" id="password-again1" name="password1" required/>
            </div>
            <div>
             <br />
              <input type="submit" value="register" name="action"/>
            </div>
          </form>
        </div>


</div>

<?php include 'view/navbar.php'; ?>

 <?php include 'view/footer.php'; ?>
</body>
</html>
