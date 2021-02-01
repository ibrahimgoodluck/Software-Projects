<?php
	require_once 'core/config.php';
	require_once 'core/functions.php';

	if(is_loggedin_customer()){
        login_error_redirect_logout();
    }
	
	if(isset($_POST["submit"]))
	{
		

		
		// accessing values entered in the form
		
		// $fname = $_POST["fname"];
		// $mname = $_POST["mname"];
		// $lname = $_POST["lname"];
		// $email = $_POST["email"];
		// $ibuu = $_POST["pass"];
		// $password1 = $_POST["pass"];
		//  $password2 = $_POST["pass1"];
		// $number = $_POST["number"];
		// $date = $_POST["date"];
		// $sex = $_POST["sex"];

		$fname = ((isset($_POST['fname']))?clean($_POST['fname']):'');
		$email = ((isset($_POST['email']))?clean($_POST['email']):'');
		$number = ((isset($_POST['number']))?clean($_POST['number']):'');
		$mname = ((isset($_POST['mname']))?clean($_POST['mname']):'');
		$lname = ((isset($_POST['lname']))?clean($_POST['lname']):'');
		$password1 = ((isset($_POST['pass']))?clean($_POST['pass']):'');
		$password2 = ((isset($_POST['pass1']))?clean($_POST['pass1']):'');
		$sex = ((isset($_POST['sex']))?clean($_POST['sex']):'');
		$date = ((isset($_POST['date']))?clean($_POST['date']):'');

		$query = "select email from customer where email = '$email'";
		 	

		 $query = "select * from customer where email = '$email'";
			
			$result = mysqli_query($db, $query);
		 	// echo $musa["3"];

		$row = mysqli_num_rows($result);

		if($row == 0){
			if ($password1 == $password2) {



				//php function for inserting data to the database tabl

				$pwd = password_hash($password2, PASSWORD_DEFAULT);

				echo $fname.','.$mname.','.$lname.','.$mname.','.$pwdecho.','.$sex.','.$date.','.$email.','.$number;
				
				 $query = "INSERT INTO customer(firstname, middlename, lastname, email, password, phonenumber, birthday, gender) VALUE('$fname','$mname','$lname','$email','$pwd','$number','$date','$sex')";
			mysqli_query($db, $query);
			
			//A function to connect with another form.
			header("location:third.php");
			
			}

			else
			{
				echo
				 "<p class='error1'>You enter different passwords.</p>";


			}

		}

		else
		{
			echo "<p class='error4'>Email already exist please try again later </p>";
		}
		}
			?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<title> client's form</title>
	<style type="text/css">
		li{
			list-style-type: none;
			font-size: 45px;
			
		}
		.h{
			
				position: absolute;
				top: 160px; 
			}
			 .error1
		 {
			color: red;
			position: absolute;
			top: 488px;
			left: 810px;
		}
			 .error4
		 {
			color: red;
			position: absolute;
			top: 425px;
			left: 700px;
		}
	</style>
	</head>
	<body bgcolor="#F2D7D5">
	
	<div class="h">
	 <ul>
       <li><a href="index.php">Home</a><br ></li>
        <li><a href="third.php">Login</a><br ></li>
    
     
      </ul>
</div>
 
		<div class="header">
			<h1><i>Clinic appointment system</i></h1>
		
	
	<link rel="stylesheet" type="text/css" href="style2.css">
</div>
	
	<div class="ben"><center>
		
		<h2><i><u>client's registry</u></i></h2>
	
	<p><em>Fill the credentials below</em></p>
	<div class="table">

	<form action="second.php" method="post">

	First name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fname"  required class="inpt1"><br>
	Middle name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="mname" class="inpt1"> <br>
	Last name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="lname" required  class="inpt1"><br>
	E-mail &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="email"   class="inpt1" required><br>
	Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name ="pass"  class="inpt1" required><br>
	Confirm password <input type="password"  name="pass1" class="inpt1" required><br>
	Phone number &nbsp&nbsp&nbsp&nbsp<input type="text" name="number"  class="inpt1" required>
	<br>

Date of birth:&nbsp&nbsp&nbsp&nbsp<input type="date" name="date"  class="inpt1" required>
<br><br></div>

	Gender:<input type="radio" name="sex" value="Male"  class="inpt1" required>Male 
			<input type="radio" name="sex" value="Female"  class="inpt1" required>Female
 	<br><br>
<input type="Submit" name="submit" >    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="Reset" name="Reset" ><br>


	</div></form></center><br>
  <br><center><ins>&copyClinic appointment system 2019:</ins></center></div></div>
</body>
</html>