<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "vifaa_vya_shughuli";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Could not connect to the database: " . mysqli_connect_error());
}


?>