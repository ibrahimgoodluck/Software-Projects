<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>VifaaVyaShughuli</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- A logo is to be added here
				<a href="#" class="navbar-brand"><img src="#" alt="" width="135" height="96"/></a> -->

			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Nyumbani</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-tags"></span>Vifaa</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="panel panel-primary">
					<div class="panel-heading">Kamilisha Huduma</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Maamuzi</b></div>
							<div class="col-md-2 col-xs-2"><b>Picha ya Kifaa</b></div>
							<div class="col-md-2 col-xs-2"><b>Jina la Kifaa</b></div>
							<div class="col-md-2 col-xs-2"><b>Idadi</b></div>
							<div class="col-md-2 col-xs-2"><b>Bei (Tsh)</b></div>
							<div class="col-md-2 col-xs-2"><b>Jumla (Tsh)</b></div>
						</div>
						<div id="cart_checkout"></div>
						</div> 
					</div>
					<div class="panel-footer">VifaaVyaShughuli, &copy;2021</div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
</body>	
</html>
	