<?php
include_once('connection.php');
if (isset($_POST['ADD'])) {
	$model = $_POST['name'];
	$imei1 = $_POST['imei1'];
	$imei2 = $_POST['imei2'];
	$route = $_POST['number'];
	$zone = $_POST['zone'];
	$requirement = $_POST['requirement'];

	$query = "insert into replacement(route_r, phone_model_r, imei1_r, imei2_r,zone_r,requirements_r) values('$route','$model','$imei1','$imei2','$zone','$requirement')";
	$result = mysqli_query($myconnect,$query);
	if ($result) {
		echo "phone recorded";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="head">
	<header>
		<H1 class='text' >PHONES RECORD SYSTEM</H1>
		<!-- <img src="logo2.jpg" class="center2"> -->
		<div class="card-header">
    		<ul class="nav nav-pills card-header-pills justify-content-end">
     			 <li class="nav-item">
        			<a class="nav-link" href="add.php">Add</a>
      			</li>
      			 <li class="nav-item">
        			<a class="nav-link active" href="replace.php">Replace</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="view.php">View</a>
      			</li>
     			 <li class="nav-item">
        			<a class="nav-link" href="#">HOME</a>
      			</li>
    		</ul>
 		 </div>
	</div>
	</header>
	</div>
	<hr>
	<form class ='form' method="POST" action="replace.php">
	<div class="break">
		<label><strong>PHONE MODEL:</strong></label>
		<input type="text" name="name" placeholder="infinix hot 8" class="maji3" required>
		<br></br>
		<label><strong>PHONE IMEI NO.1:</strong></label>
		<input type="number" name="imei1" placeholder="355023114887840
" class="" required>
		<br></br>
		<label><strong>PHONE IMEI NO.2:</strong></label>
		<input type="number" name="imei2" placeholder="355023114887857
" class="" required>
		<br></br>
	</div>
	<div class="break2">
		<label><strong>ROUTE NUMBER:</strong></label>
		<input type="number" name="number" placeholder="11" class="fit2" required>
		<br></br>
		<label><strong>ZONE:</strong></label>
		<input type="text" name="zone" placeholder="F" class="fit" required maxlength="1">
		<br></br>
		<label><strong>REQUIREMENT:</strong></label>
		<input type="text" name="requirement" placeholder="F.COVER + PROTECTOR" class="fit3">
		<br>
		<button class = 'button2' name='ADD'><strong>ADD</strong></button>
	</div>
	</form>
	<div class="down">
	<footer >
		
	</footer>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>