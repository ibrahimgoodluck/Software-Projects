<?php
	include_once('connection.php');
	$query = "SELECT * FROM records
	left JOIN replacement 
	ON records.route = replacement.route_r";
	$result = mysqli_query($myconnect, $query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="card text-center">
  		<div class="card-header">
    		<ul class="nav nav-pills card-header-pills justify-content-end">
     			 <li class="nav-item">
        			<a class="nav-link" href="add.php">Add phone</a>
      			</li>
      			 <li class="nav-item">
        			<a class="nav-link" href="adduser.php">Add user</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="replace.php">Replace</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link active" href="view.php">View</a>
      			</li>
     			 <li class="nav-item">
        			<a class="nav-link" href="change">Change password</a>
      			</li>
      			 <li class="nav-item">
        			<a class="nav-link" href="logout.php">Logout</a>
      			</li>
    		</ul>
 		 </div>
	</div>
	<table class="table">
		<thead>
			<th>MODEL</th>
			<th>IMEI 1</th>
			<th>IMEI 2</th>
			<th>ZONE</th>
			<th>ROUTE</th>
			<th>PHONE NUMBER</th>
			<th>REQUIREMENT</th>
			<th>REPLACED PHONE</th>
			<th>IMEI 1</th>
			<th>IMEI 2</th>
			<th>REQUIREMENT</th>
		</thead>
		<?php
		  while($row = mysqli_fetch_assoc($result)){
		?> 	
		<tr>
			<td><?php echo $row['phone_model']; ?></td>
			<td><?php echo $row['imei']; ?></td>
			<td><?php echo $row['imei2']; ?></td>
			<td><?php echo $row['zone']; ?></td>
			<td><?php echo $row['route']; ?></td>
			<td><?php echo $row['mobile_number']; ?></td>
			<td><?php echo $row['requirements']; ?></td>
			<td><?php echo $row['phone_model_r']; ?></td>
			<td><?php echo $row['imei1_r']; ?></td>
			<td><?php echo $row['imei2_r']; ?></td>
			<td><?php echo $row['requirements_r']; ?></td>
		</tr>
		 <?php
		  }
		 ?>
	</table>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>