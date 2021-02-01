<?php
// connet database and web page;//
$connect = mysqli_connect("localhost", "root", "", "phone_records");
if(!$connect){
	echo "error";
}
// to take input from the form the web page//
	if(isset($_POST['send'])){
	 $username = $_POST['user'];
	 $password = $_POST['pass'];
	 echo "$username";
	 echo "$password";

	 $query = "SELECT * FROM USER WHERE USERNAME = '$username' AND PASSWORD = '$password'";
	 $result = mysqli_query($connect, $query);
	 $row = mysqli_num_rows($result);
	 if($row == 1){
		header("location: add.php");
	 }
	 else{
		echo "<p class='error'>error</p>";
	 }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<style>
		p { color:blue;
	}</style>
</head>
<body class = 'background'>
	<div>
	<h1 align ='center' class = 'text2'>PHONES RECORD SYSTEM</h1>
	</div>
	<hr>
	<form class='position' method="post" action="index.php">
		<!-- <img src="logo2.jpg" class="center"> -->
		<br></br>
		<label class='maji2'><strong>USERNAME:</strong></label>
		<input type="text" name="user" required>
		<br></br>
		<label><strong>PASSWORD:</strong></label>
		<input type="password" name="pass" class="maji" required>
		<br></br>
		<button class = 'button' name="send"><strong>LOGIN</strong></button>
	</form>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>