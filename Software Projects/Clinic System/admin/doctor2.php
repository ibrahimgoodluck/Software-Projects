<!DOCTYPE html>
<html>
<head>

<?php

require_once '../core/config.php';
require_once '../core/functions.php';

// if(!is_loggedin_customer()){
if(!is_loggedin()){

        login_error_redirect();
    }

$sql = $db->query ("SELECT * FROM bookings WHERE doctor = '$userid' ");

?>

<meta charset="UTF-8"> 
	<title>see patients</title>
	
	
<style type="text/css">
	li{
		list-style-type: none;
		font-size: 30px;
}
	ins{
		position: absolute;
		top: 900px;
	}
	p{
		font-size: 30px;
	}
	.ben{
	width:100%;
	height: 100px;
	border-style: groove;
	background-color: lightblue;

}
.header h1{
	
	text-align: center;
	text-transform: uppercase;
	letter-spacing: 6px;
	color: purple;
	font-family: verdana;
}

		
</style>

<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body background="hosp4.jpg">
       
      


	<center>
		
	
		<div class="ben">
		<div class="header">
			<h1><i>Clinic appointment system</i></h1>
		</div>
		<br>
		<h2><i>patient's booking.</i></h2>
	</center>
    

      	<ul>
        	
     <li><a href="logout.php">Logout</a></li>
      </ul>  

<center>
		<p>
				<table border="1" width="20" height="350" bgcolor="cyano">

								
					<tr>
					<td>DOCTOR'S NAME</td>
					<td>PATIENT BOOKED</td>
					<td>TIME</td>
					<td>PATIENT'S CONTACT</td>
					</tr>
					<?php while ($bookings = mysqli_fetch_assoc ($sql)) : ?>
				<tr>
					<td>Dr.<?=$userdata['firstname'].' '.$userdata['lastname'];?></td>
					<td><?=$bookings['customer'];?></td>
					<td><?=$bookings['date'];?></td>
					<td><?=$bookings['cphone'];?> / <?=$bookings['cemail'];?></td>

				</tr>
				<?php endwhile ;?>

			</table>
			
		</p>
		</center>
  
    <center>
	 <ins>
	&copyClinic appointment system 2019:
	</ins></center>
  </div>
</body>
</html>