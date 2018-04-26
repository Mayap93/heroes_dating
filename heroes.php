<?php include 'includes/header.php';?>

<h1 class="text-center">Meet with new heroes</h1>

<?php

// ensure that php errors are displayed
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


	// Include and initiate the database class (you only have to do this once)
	include('classes/database.php');
	$database = new Database;
	$database->connect();
  $myid = 1;
  $ironman = 2;
  $spiderman = 3;

  // Get all t titles
  $response = $database->query("SELECT * FROM superheroes WHERE id = $ironman;");
  //var_dump($response);
  $profile = $response[0];


?>

<div class="container mb-5">
    <h1 class="my-4">Luke Cage Profile</h1>

    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="<?php echo $profile['image'];?>" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Description</h3>
        <p><?php echo $profile['description'];?></p>
        <h3 class="my-3">Details</h3>
        <ul>
          <li>Name: <?php echo $profile['name'];?></li>
          <li>Age: <?php echo $profile['age'];?></li>
          <li>Gender: <?php echo $profile['gender'];?></li>
          <li>Superpower: <?php echo $profile['superpower'];?></li>
          <li>Location: <?php echo $profile['location'];?></li>
        </ul>
				<h6>Send a commend</h6>
				<form class="" action="actions/comment.php" method="post">
					<div class="input-group">
					<textarea class="form-control" name="commentText" aria-label="With textarea"></textarea>
					<div class="input-group-append">
				 <input type="submit" class="btn btn-secondary">
					</div>
				</div>
				</form>
				<a href="actions/likes.php"><button type="button" name="button">Like</button></a>
      </div>

    </div>
  </div>
<?php
	$response = $database->query("SELECT * FROM superheroes WHERE id = $spiderman;");
  //var_dump($response);
  $profile = $response[0];


?>

<div class="container mb-5">
    <h1 class="my-4">Superman Profile</h1>

    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="<?php echo $profile['image'];?>" alt="">
      </div>

      <div class="col-md-4">
        <h3 class="my-3">Description</h3>
        <p><?php echo $profile['description'];?></p>
        <h3 class="my-3">Details</h3>
        <ul>
          <li>Name: <?php echo $profile['name'];?></li>
          <li>Age: <?php echo $profile['age'];?></li>
          <li>Gender: <?php echo $profile['gender'];?></li>
          <li>Superpower: <?php echo $profile['superpower'];?></li>
          <li>Location: <?php echo $profile['location'];?></li>
        </ul>
				<h6>Send a commend</h6>
				<form class="" action="actions/comment.php" method="post">
					<div class="input-group">
					<textarea class="form-control" name="commentText" aria-label="With textarea"></textarea>
					<div class="input-group-append">
				 <input type="submit" class="btn btn-secondary">
					</div>
				</div>
				</form>
				<a href="actions/likes.php"><button type="button" name="button">Like</button></a>
      </div>

    </div>
  </div>

<?php include 'includes/footer.php';?>
