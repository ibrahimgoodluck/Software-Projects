<?php
  require_once 'core/config.php';
  require_once 'core/functions.php';
  //echo $_SESSION["email"];

  if(!is_loggedin_customer()){
        login_error_redirect_customer();
    }
    
  if(isset($_GET['book']) && $_GET['book'] !=''){
  $id = $_GET['book'];

  $sql = $db->query ("SELECT * FROM users WHERE id = '$id' ");

  $doctor = mysqli_fetch_assoc ($sql);

  if(isset($_POST["submit"]))
  {
    $phone = $userlog['phonenumber'];
    $email = $userlog['email'];
    $customer = $userlog['firstname'].' '.$userlog['lastname'];
    $doc = $doctor['id'];
        
         $query = "INSERT INTO bookings(doctor, customer, cphone, cemail) VALUE('$doc','$customer','$phone', '$email')";
      mysqli_query($db, $query);
      
      //A function to connect with another form.
        header("location:thanks.php");
       // header("location:project2.php");
        // header("location:index.php");


    }

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
      font-size: 40px;

  /*    position: absolute;
      left: 700px;*/
    
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

    
  </style>
  

<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body background="hosp4.jpg ">


    <div class="ben">
    <div class="header">
      <h1><i>Clinic appointment system</i></h1>
    </div>

  <div class="h">
    
   
 
  <center>
    
  

    <h2 style="font-size: 45px; font-family:sans-serif;color:green">
      <i>
      congratulation
      <span>
       <?php  if(is_loggedin_customer()) 
       {
        
       echo''.$userlog['firstname'];
      }
      else {
        echo 'invalid';
      }?>
    </span>
      welcome to the confirmation page.</i>
    </h2>
  

</div>
 
  <center>
<p div id="dr" style="color: magenta">
  Are you sure you want to book Dr. <?=$doctor['firstname'].' '.$doctor['lastname'];?> <br> 
  who is <?=$doctor['specialist'];?> specialist ? </p>
     
</center>
<br>
  <center>

  <form action="booking.php?book=<?=$doctor['id'];?>" method="post"><input type="Submit" name="submit" value="Yes I am Sure" style="font-size: 25px"></form> 
</center>
   <ul> <li><a href="project2.php">No! cancel selection book again </a></li> </ul>
  
 

    </div>


 
</body>
</html>
<?php };?>