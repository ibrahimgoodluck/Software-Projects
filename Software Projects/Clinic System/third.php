<?php
	require_once 'core/config.php';
	require_once 'core/functions.php';

	
	// if(is_loggedin_customer()){
 //        login_error_redirect_logout();
 //    }
    
	if(isset($_POST["submit"])){
  		$errors = array();
  		$email = ((isset($_POST['email']))?clean($_POST['email']):'');
  		$password = ((isset($_POST['password']))?clean($_POST['password']):'');
  		$sql = $db->query("SELECT * FROM customer WHERE email = '$email'");
  		$sql_admin = $db->query("SELECT * FROM users WHERE email = '$email'");

  		$user = mysqli_fetch_assoc($sql);
  		$user_admin = mysqli_fetch_assoc($sql_admin);
  		$pass = $user_admin['password'];

	// untill the user fails to log in this echo statement should run 
  // echo $user['password'];
    if(empty($email)||empty($password)){
      $errors[]='You must enter both Email and Password';
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error[]='Please check the  Email you entered';
    }
    else{

        if(mysqli_num_rows($sql_admin) >0){
            //var_dump($user_admin);

            if(!password_verify($password,$pass)) {
            $errors[]= 'The password you entered is incorrect,please try again';
            }else{
            //login admin
            	/*
            	$strDoctor = $user_admin['permission'];
            	if ( $strDoctor == "doctor"){
            		$_SESSION['doctor'] = $user_admin['id'];
            		header('Location: admin/doctor2.php');
            	} else {
            		*/
            		login($user_admin['id']);
            	// }
            }
        }

        if(mysqli_num_rows($sql) >0){
            if(!password_verify($password,$user['password'])) {
             $errors[] = 'The password you entered is incorrect,please try again';
            // var_dump($errors);
            // print_r($errors);
            if(!empty($errors)){
            	foreach ($errors as $key => $value) {
            		echo $value;
            	}
            }

            }else{
           // login the users
              	$user_id = $user['id'];
              	login_customer($user_id);
   	
   	// The line below wont run becuse of redirect made in log in user
   				// $_SESSION['success'] = 'You are Successfull Logged in ';
         }
        }
    }
  }
	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>

	<link rel="stylesheet" type="text/css" href="style3.css">

	<style type="text/css">
		p{
			font-size: 30px;
		}
		.ab{
			font-size: 30px;
			font-family: sans-serif;
			border-radius:20px;
		}
		.error2	
		 {
			color: red;
			position: absolute;
			top: 690px;
			left: 670px;
		}
		.h{
			
				position: absolute;
				top: 150px; 
			  font-size: 35px;
			}
			li{
				list-style-type: none;
			}			
	</style>

</head>
<body>
	<div class="background"></div>
	<div>
		<div class="h">
	 <ul>
       <li><a href="index.php">Home</a></li>
        <li><a href="second.php">Register</a></li>
        
    
     
      </ul>
  </div>
	<div class="ben">
		<div class="header">
			<h1><i>Clinic appointment system</i></h1>
		</div>
	</div>
	
	<div class="login">
	<form action="third.php" method="post">
	<center>
		
	
		
		<h2><i>welcome to login page.</i></h2>
	 
	
<p><em>Email and Password should be identical with those entered in registration form.
</em></p>

	<table>
		
<tr>
	<td>E-mail</td>
	<td><input type="email" name="email" placeholder="email address" required></td></tr>




<tr>
	<td>Password</td>
	<td><input type="password" name ="password" placeholder="password" required></td></tr>




</table><br><br>
<div class="ab">

	<input type="Submit" name="submit" value="Enter" style="color:blue;" >
</div>

	</form>
	</center>	
		 <br> <br> 
		 <center>
	 <ins>
	&copyClinic appointment system 2019:
	</ins>
</center>
	</div>
</div>
	</div>
</body>
</html> 