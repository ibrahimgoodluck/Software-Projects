<!DOCTYPE html>
<html>
<head>
<?php

require_once '../core/config.php';
require_once '../core/functions.php';

if(!is_loggedin()){
        login_error_redirect();
    }
    if(!has_permission('admin')){
    login_error_redirect_admin();
}

if(isset($_POST["submit"])){
		$fname = ((isset($_POST['fname']))?clean($_POST['fname']):'');
		$email = ((isset($_POST['email']))?clean($_POST['email']):'');
		$number = ((isset($_POST['number']))?clean($_POST['number']):'');
		$mname = ((isset($_POST['mname']))?clean($_POST['mname']):'');
		$lname = ((isset($_POST['lname']))?clean($_POST['lname']):'');
		$password1 = ((isset($_POST['pass']))?clean($_POST['pass']):'');
		$password2 = ((isset($_POST['pass1']))?clean($_POST['pass1']):'');
		$sex = ((isset($_POST['sex']))?clean($_POST['sex']):'');
		

		$query = "select email from users where email = '$email'";
		$customer = "select email from customer where email = '$email'";
			
			$result = mysqli_query($db, $query);
			$count = mysqli_query($db, $customer);
		 	// echo $musa["3"];

		$row = mysqli_num_rows($result);
		$cust = mysqli_num_rows($count);

		if($row == 0){
			if ($password1 == $password2) {



				//php function for inserting data to the database table
				
				$pwd = password_hash($password2, PASSWORD_DEFAULT);
				$admin = "admin,editor";
				
				 $query = "INSERT INTO users(firstname, middlename, lastname, email, password, phonenumber, gender, permission) VALUE('$fname','$mname','$lname','$email','$pwd','$number','$sex','$admin')";
			mysqli_query($db, $query);
			
				echo "Administrator information succesful added";

			//A function to connect with another form.
			}

			else
			{
				echo
				 "<p class='error1 text-danger'>You enter different passwords.</p>";


			}

		}

		else if ($cust != 0) {
			echo "<p class='error4 text-success'>A certain Customer is using this email </p>";
		}

		else
		{
			echo "<p class='error4 text-danger'>Email already exist please try again later </p>";
		}
		}


?>
<title>Doctors page</title>

<style type="text/css">
	li{
		list-style-type: none;
	}
	.h{
			
				position: absolute;
				top: 350px;
				position: absolute;
				left: 47px;
				font-size: 35px;
				top: 13px; 
			}


</style>

	<link rel="stylesheet" href="style.css" type="text/css">
</head>

	
	<body background="hosp1.jpg"><div class="hello">

	<div class="h">
	 <ul>
        <li><a href="doctors.php">Add Doctor</a></li>
   <li><a href="logout.php">Logout</a></li>
      </ul>
</div>

		<h2><u>Admin's form</u></h2>
		<p><i>Fill your information here</i></p>
		<table>
	
		<form action="admin.php" method="post">
			<!-- <div class="container"> -->
			<div class="inner_form"><tr>
		<td><div class="label">First name</div>
		<input type="text" name="fname"></td>

		<td><div class="label">Middle name</div>
		<input type="text" name="mname"></td>

		<td><div class="label">Last name</div>
		<input type="text" name="lname"></td></tr>
	</div>
	
	<div class="middle_form"><tr>

		<td><div class="label">Email</div>
		<input type="email" name="email"></td>

		<td><div class="label">Password</div>
		<input type="password" name="pass"></td>

		<td><div class="label">Confirm password</div>
		<input type="password" name="pass1"></td></tr>
	</div>
	<br>

		<tr><div class="last_form">
		<td><div class="label">Phone number</div>
		<input type="text" name="number"></td>
	
		<td>Gender:<input type="radio" name="sex" value="Male"  class="inpt1" required>Male 
			<input type="radio" name="sex" value="Female"  class="inpt1" required>Female</td>
 	<br><br>       
 	<td><input type="Submit" name="submit" >    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="Reset" name="Reset" ></td></tr></<br>
		</div> 
		</div>        
		
	</div>

	</form>
	</table>

	</body>
</html>