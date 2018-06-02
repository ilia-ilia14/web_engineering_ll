<?php
$links = array("index.php?action=supplumentsPage",  "index.php?action=weightPage", "index.php?action=equipmentsPage");
$count = 0;
?>

<div id="navBar" >
    <ul>
    <li><a href="index.php?action=workoutPage"> Workouts </a>
		
</li>
     <li><a href="index.php?action=specialsPage"> Weekly Speical </a></li>
    <li><a href="#">Product</a> <ul>
        <li> <a href="index.php?action=supplumentsPage&categoryID=2" > Suppluments</a></li>
        <li> <a href="index.php?action=weightPage&categoryID=3">Weight</a>  </li>
        <li><a href="index.php?action=equipmentsPage&categoryID=7"> Equipment</a> </li>
            <!--
          <?php foreach ($categories as $category) : ?>
            <li>
            <a href="<?php  echo $links[$count]; $count++;?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
         -->
        </ul></li>
     <li><a href="index.php?action=trainersPage"> Personal Trainer </a></li>
        <li><a href="index.php?action=locationPage"> Gym Locator </a></li>

    </ul>

</div>

         