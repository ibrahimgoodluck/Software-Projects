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
		<style>
			table tr td {padding:10px;}
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><img src="miboshoplogo1.png" alt="" width="135" height="96"/></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="profile.php"><span class="glyphicon glyphicon-home"></span>Nyumbani</a></li>
				<li><a href="profile.php"><span class="glyphicon glyphicon-tags"></span>Vifaa</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Taarifa ya Agizo la Mteja</h1>
						<hr/>
						<div class="row">
							<div class="col-md-6">
								<img style="float:right;" src="product_images/cello senator table.png" class="img-thumbnail"/>
							</div>
							<div class="col-md-6">
								<table>
									<tr><td>Jina la Kifaa</td><td><b>Senate Table</b> </td></tr>
									<tr><td>Bei ya Kukodi Kifaa</td><td><b>Ths. 1,000/-</b></td></tr>
									<tr><td>Idadi</td><td><b>3</b></td></tr>
									<tr><td>Malipo</td><td><b>Yamekamilika</b></td></tr>
									<tr><td>Namba ya Muamala</td><td><b>RTSH5415SHSHYD87D25S</b></td></tr>
								</table>
							</div>
						</div>
					</div>
					<div class="panel-footer">VifaaVyaShughuli, &copy;2021</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
