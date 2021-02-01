<?php

  require_once 'core/config.php';
  require_once 'core/functions.php';

  if(!is_loggedin_customer()){
        login_error_redirect_customer();
    }
  //echo $_SESSION["email"];

  $sql = $db->query ("SELECT * FROM users WHERE permission = 'doctor' ");

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
	<title>select</title>

  <style type="text/css">

        ul{
        list-style-type: none;
      font-size: 35px;

    }
      #dr{
      font-size: 20px;
      font-family: sans-serif;
      color: blue;
     
    
    }
    h2{
     /* color: magenta;*/
      color: black;
      letter-spacing: 2px;
      font-family: verdana;


    }
    ins{
      font-size: 20px;
       position: absolute;
      bottom: 900px;
    
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

.h{
  font-size: 25px;
  font-family: sans-serif;
}
    
  </style>
	


</head>
<body bgcolor="#ECC5C0">
    <div class="ben">
    <div class="header">
      <h1><i>Clinic appointment system</i></h1>
    </div>
  </div>
  

  <div class="h">
   

  
	<center>
		
	
	
		<h2><i>WELCOME</i></h2>
  

		<h5>

A table below shows doctors present in our hospital.<br>
You are required to  select a particular doctor of your choice.</h5>



<br> 


<table border="2"  >
<tr>
  <th>DOCTOR`S NAME </th>
  <th>GENDER</th>
	<th>SPECIALIST</th>
	<th>COSTS</th>
	<th>DAY</th>
  <th>HOURS</th>
	<th>BOOK</th>
  </tr>
  
  <?php while ($doctor = mysqli_fetch_assoc ($sql)) : ?>
  <tr >
  <td><?=$doctor['firstname'].' '.$doctor['lastname'];?> </td>
  <td><?=$doctor['gender'];?> </td>
  <td><?=$doctor['specialist'];?> </td>
  <td><?=$doctor['costs'];?> </td>
  <td><?=$doctor['day'];?> </td>
  <td><?=$doctor['hours'];?> </td>
  <td><a href="booking.php?book=<?=$doctor['id'];?>"> Book 
    <?php
      $gender = $doctor['gender']; 

      if ($gender == "Male") {
        echo 'Him';
      }
      else {
        echo 'Her';
      }
    ?>
  </a>
  </td>
  </tr>
  <?php endwhile ;?>
     
     </table>
</div>
  <br>
  <center>
<p div id="dr"><em>
  N.B advices are provided for free before the actual treatment </em>
 </p>

     </div>  <br>
     <br>
     

      <!-- <ul>
          
      <li><a href="logout.php">Logout</a></li>
      </ul>
 -->
       </center>
    
  


 
     
    
 
</body>
</html>