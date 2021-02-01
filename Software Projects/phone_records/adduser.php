<?php
include_once('connection.php');
if(isset($_POST['send'])){
	 $username = $_POST['user'];
	 $password = $_POST['pass'];
	
	$query2 = "select username from user where username = '$username'";
	$result = mysqli_query($myconnect,$query2);
	$rows = mysqli_num_rows($result);
	if($rows>= 1){
		echo 'change username';
	}
	else{
		$query = "insert into user(username,password) values('$username','$password')";
		$result = mysqli_query($myconnect,$query);
		if ($result) {
		echo "user added";
		}

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
	<!-- 	<img src="logo2.jpg" class="center2"> -->
		<div class="card-header">
    		<ul class="nav nav-pills card-header-pills justify-content-end">
     			 <li class="nav-item">
        			<a class="nav-link active" href="add.php">Add</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="replace.php">Replace</a>
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
	
	<form class='position' method="post" action="adduser.php">
		<br></br>
		<label class='maji2'><strong>USERNAME:</strong></label>
		<input type="text" name="user" required>
		<br></br>
		<label><strong>PASSWORD:</strong></label>
		<input type="password" name="pass" class="maji" required>
		<br></br>
		<button class = 'button' name="send"><strong>SAVE</strong></button>
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