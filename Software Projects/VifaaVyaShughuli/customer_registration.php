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
		
<!-- A logo to be added here -->
			<!-- <div class="navbar-header">
				<a href="#" class="navbar-brand"><img src="miboshoplogo1.png" alt="" width="135" height="96"/></a>
			</div> -->

			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Nyumbani</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-tags"></span>Vifaa</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Fomu ya Mteja Kujisajili</div>
					<div class="panel-body">
					
					<form method="post">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">Jina la Kwanza:</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="l_name">Jina la Mwisho:</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Barua-pepe:</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Neno-siri:</label>
								<input type="password" id="password" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Rudia Neno-siri:</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Namba ya Simu:</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Anwani 1:</label>
								<input type="text" id="address1" name="address1"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Anwani 2:</label>
								<input type="text" id="address2" name="address2"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="float:right;" value="Jisajili" type="button" id="signup_button" name="signup_button"class="btn btn-success btn-md">
							</div>
						</div>
						
                        </form>
					</div>
					
					<div class="panel-footer">VifaaVyaShughuli, &copy;2021</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
