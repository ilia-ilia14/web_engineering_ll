<?php
if(!isset($_SESSION))
{
	session_start();
}
?>
<DOCTYPE html>
<html>
<head> 
<title> Account Manager </title>
<link style="text/css" rel="stylesheet" href="../css/indv-styles.css" />
<link rel="stylesheet" type="text/css" href="../css/product.css">
<link rel="stylesheet" type="text/css" href="../css/reg-style.css">
<link rel="stylesheet" type="text/css" href="../css/productview.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php include 'view/header.php'; ?>

<div id="reg-div" >



        <div class="register">
          <h3> Edit Account</h3>
          <b style="color:red;"> <?php echo $error; ?> </b>
          <form id="reg-form" method="post" action="index.php">
            <div>
              <label for="name">Firstname*</label>
              <input type="text" name="firstname" id="name1" value="<?php echo $member['firstName']; ?>" />
            </div>
            <div>
              <label for="name">Lastname*</label>
              <input type="text" id="name1" name="lastname" value="<?php echo $member['lastName']; ?>" required/>
            </div>
            <div>
              <label for="email">Email*</label>
              <input type="text" id="email" name="email" value="<?php echo $member['Email']; ?>" required/>
            </div>
            <div>
              <label for="email">Phone*</label>
              <input type="number" name="phone" value="<?php echo $member['Phone']; ?>" required/>
            </div>
            <input type="hidden" name="member_id" value="<?php echo $member['memberID']; ?>" />
            <div>
              <label for="password">Password*</label>
              <input type="password" id="password" name="password" required/>
            </div>
            <div>
              <label for="password-again1">Password Again*</label>
              <input type="password" id="password-again" name="password1" required/>
            </div>
            <div>
             <br />
              <input type="submit" value="Save" name="action"/>
            </div>
          </form>
        </div>

</div>


<?php include 'view/navbar.php'; ?>
 <!-- ################################################################################################ -->
<?php include 'view/footer.php'; ?>
</body>
</html>