<?php

if(!isset($_POST["password1"]))
{
	header("location:login.html");
}


else{





 $con = mysqli_connect("localhost","root","","electronix");

 if(mysqli_connect_errno()){
  
  echo"Imeshindikana kuunganishwa: " . mysqli_connect_error(); 
  
}



$psec = $_POST["password1"];
$nsec = $_POST["password2"];

$query = "select secques from ad_log";
$run = mysqli_query($con,$query);
$data = mysqli_fetch_row($run);
$answer = $data[0];

if($psec==$answer)
{

	$qry = "update ad_log set secques = '$nsec'";
	$result = mysqli_query($con,$qry);

	echo "<script>alert('Jibu limesahihishwa!!!')</script>";

	echo "<script>window.open('login.html','_self')</script>";

}

else
{
	echo"<script>alert('Tafadhali jaza jibu sahihi.')</script>";
}

}

?>