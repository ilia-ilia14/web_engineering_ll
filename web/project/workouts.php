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

<body >
<?php include ("components/navigation.php"); ?>
<div class="container">


  <div class="row align-items-center">
    <div class="col-lg-4 col-sm-12">
      <a href="#" data-toggle="modal" data-target="#makeithome1">
        <img class="img-thumbnail" src="images/workout-img/abs.png" />
      </a>
    </div>
    <div class="col-lg-4 col-sm-12">
      <a href="#" data-toggle="modal" data-target="#makeithome2">
        <img class="img-thumbnail" src="images/workout-img/arms.png" />
      </a>
    </div>
    <div class="col-lg-4 col-sm-12">
      <a href="#" data-toggle="modal" data-target="#makeithome3">
        <img class="img-thumbnail" src="images/workout-img/back.png" />
      </a>
    </div>
  </div>
  <br />
  <div class="row align-items-center">
    <div class="col-lg-4 col-sm-12">
      <a href="#" data-toggle="modal" data-target="#makeithome4">
        <img class="img-thumbnail" src="images/workout-img/legs.png" />
      </a>
    </div>
    <div class="col-lg-4 col-sm-12">
      <a href="#" data-toggle="modal" data-target="#makeithome5">
        <img class="img-thumbnail" src="images/workout-img/pre-run.png" />
      </a>
    </div>
    <div class="col-lg-4 col-sm-12">
      <a href="#" data-toggle="modal" data-target="#makeithome6">
        <img class="img-thumbnail" src="images/workout-img/cardio.jpg" />
      </a>
    </div>
  </div>
<div class="modal fade" id="makeithome1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="images/workout-img/abs.png" width="100%" />
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="images/workout-img/abs.png" style="float: left;">Download</a>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="makeithome2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="images/workout-img/arms.png" width="100%" />
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="images/workout-img/arms.png" style="float: left;">Download</a>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="makeithome3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="images/workout-img/back.png" width="100%" />
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="images/workout-img/back.png" style="float: left;">Download</a>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="makeithome4">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="images/workout-img/legs.png" width="100%" />
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="images/workout-img/legs.png" style="float: left;">Download</a>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="makeithome5">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="images/workout-img/pre-run.png" width="100%" />
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="images/workout-img/pre-run.png" style="float: left;">Download</a>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="makeithome6">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="images/workout-img/cardio.jpg" width="100%" />
      </div>
      <div class="modal-footer">
        <a class="btn btn-primary" href="images/workout-img/cardio.jpg" style="float: left;">Download</a>
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>








