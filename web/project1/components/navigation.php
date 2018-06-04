<?php
if(isset($_SESSION['loggedin']))
{
  $loggedin = $_SESSION['loggedin'];
}else { $loggedin = null; $potentialUser = "";}

?>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
       <a class="navbar-brand" href="index.php">Gymbandit.org</a>
    </div>
    <ul class="nav navbar-nav">
		<li class="dropdown">
		  <a class=" dropdown-toggle" type="button" data-toggle="dropdown">Product
		  <span class="caret"></span></a>
		  <ul class="dropdown-menu">
		  <?php foreach($_SESSION['categories'] as $category) {  ?>
			<li> <a href="index.php?action=products&categoryID=<?php echo $category['categoryid']; ?>" > <?php echo $category['categoryname']; ?></a></li>
			<?php } ?>
		  </ul>
		</li>
	  <li><a href="index.php?action=trainersPage"> Personal Trainer </a></li>
      <li><a href="index.php?action=workoutPage"> Workouts </a></li>
    </ul>
	
	<div id="topbar" class="navbar-brand"> 
    <nav>
      <ul class="navbar-nav">
      <?php
      if(!$loggedin)
        { $_SESSION['status'] = NULL; }

        if($_SESSION['status'] == 'admin')
        echo '<li><a href="product_manager/index.php" > Admin tool </a></li>';

        ?>
        <li><a href="index.php?action=goCart" ><img src="images/assets/cart.png" width="25" height="25"  ></a></li>
        <li><a href="index.php?action=contactPage" >Contact Us </a></li>
        
            
            <?php
            if(!$loggedin) {
              ?>
            
             <li><a href="index.php?action=registerPage">Signup</a></li>
             <li><a href="index.php?action=loginPage">Login</a></li>
            
            <?php
            } else {
              ?>   
            <li><a href=".?action=logout">Logout</a></li>
           <li ><a href="index.php?action=accountManager&useremail=<?php echo 
           $_SESSION['email']; ?>"> 
                 Hello <?php 
                echo $_SESSION['firstname']. " ". $_SESSION['lastname']; ?> 
                </a></li>
            <?php
            }
              ?>
      
      </ul>
    </nav>
	
	</div>
	
  </div>
  
  
  
</nav>