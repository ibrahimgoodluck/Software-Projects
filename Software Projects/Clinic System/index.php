<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>welcome page</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>

<body>
	<div class="a">
		<div class="header">
			<h1><i>Clinic appointment system</i></h1>
		</div>
		
	</div>
	<div class="row">

	<div class="column"><ul>
				
				<li><br ><a href="second.php">Register</a><br ><br><br></li>
				<?php 
				session_start();
			
				if ( isset($_SESSION['customer'])){
					 ?>
					<li><a href="logout.php">Logout</a><br><br><br></li>
				<?php } else { ?>
					<li><a href="third.php">Login</a><br><br><br></li>
				<?php } ?>
				<li><a href="about.php">About</a><br ><br><br></li>
				<li><a href="help.php">Help</a><br ><br><br></li> 
				</ul></div>
			
		<div class="column">

		<div class="hello"> <img src="hosp3.jpg" width="50%" height="200px"><img src="hosp1.jpg" width="50%" height="200px"></div>
		<div class="container">	
	
				
					<h3><b><center>Welcome to CAS</center></b></h3>
				
				<p>The Clinic Appointment System (CAS) holds all information relating to Patients and on how they can make appointment with a particular doctor so as they can get a service on time.</p>
				<br>

				<h3><b><center>What does CAS do?</center></b></h3>
				<p>CAS enables patients and doctors to manage their tasks online.
				Here is an example of what CAS do:<br></br>
					
					<dd>Patients can register for a system online.
						View and choose doctors descriptions.</dd>

							<br></br>
					<dd>Doctors can view all informations of booking patients and
						Publish their professionals including time and their specifications.</dd>	<br>

					<dd>Other:
					Advice on how to maintain a good health.</dd></p>

						
			</p>
		</div>
		</div>
	</div>
</div>
			</div></div></div><center><footer style="font-size: 25px"><ins>
				&copyClinic appointment system 2019:
			</ins></footer></center>
		</body>
</html>