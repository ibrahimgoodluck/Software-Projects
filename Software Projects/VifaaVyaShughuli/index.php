<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
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
			@media screen and (max-width:480px){
				#search{width:70%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:60px;}
			}
            
            .side-nav{
  height:100%;
  width:250px;
  position:fixed;
  z-index:1;
  top:1;
  left:1;
  background-color:#000;
  opacity: 0.8;
  padding-top:35px;
  line-height: 5px;
     overflow-x:hidden;
  transition:0.5s;
}
            
.side-nav a{
  padding:20px 10px 10px 30px;
  text-decoration:none;
  color:#5b94c5;
  display:block;
  transition:0.3s;
}

.side-nav a:hover{
  color: #337ab7;
}

.side-nav .btn-close{
  position:absolute;
  top:0;
  right:22px;
  font-size:35px;
  margin-left:50px;
}

#main{
  transition:margin-left 0.5s;
  padding-left: 0px;
  overflow:hidden;
}
            .open-slide{
                margin-right: 100px;
            }
            
		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">

        
		<div class="container-fluid">	

<!-- A logo to be added here -->
			<!-- <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><img src="#" alt="" width="135" height="96"/></a>
			</div> -->


	<span class="open-slide">
	<!--The open-slider <a></a> used to be in here-->
    </span>

		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">

			    <li><a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
            <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
            <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
            <path d="M0,23 30,23" stroke="#fff" stroke-width="5"/>
        </svg></a></li>

				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Nyumbani</a></li>
				<li><a href="profile.php"><span class="glyphicon glyphicon-tags"></span>Vifaa</a></li>
				<li style="width:180px;left:25px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:30px;"><button class="btn btn-primary" id="search_btn">Sachi</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>Ingia</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Ingia</div>
								<div class="panel-heading">
									<label for="email">Barua-pepe</label>
									<input type="email" class="form-control" id="email" required/>
									<label for="email">Neno-siri</label>
									<input type="password" class="form-control" id="password" required/>
									<p><br/></p>
									<a href="#" style="color:white; list-style:none;">Nimesahau Neno-siri langu!</a><input type="submit" class="btn btn-success" style="float:right;" id="login" value="Ingia">
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
				<li><a href="customer_registration.php"><span class="glyphicon glyphicon-user"></span>Jisajili</a></li>
                <li><a href="admin_area/login.html"><span class="glyphicon glyphicon-sunglasses"></span>Msimamizi</a></li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
         <div class="col-md-1"></div>
            <div class="col-md-2 col-xs-12"></div>
			<div id="side-menu" class="side-nav col-md-2 col-xs-12">
        <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
				<div id="get_category">
				</div>
				<div id="get_brand">
				</div>
			</div>
			<div id="main" class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading"><b>Habari! Karibu kwenye tovuti yetu ya VifaaVyaShughuli. Hapa tunakodisha vifaa mbalimbali kwa ajili ya shughuli mbalimbali za kijamii.</b></div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
					</div>
					<div class="panel-footer">VifaaVyaShughuli, &copy;2021</div>
				</div>
		  </div>
            <div class="col-md-12"></div>
	</div>
          </div>
    
      <script>
    function openSlideMenu(){
      document.getElementById('side-menu').style.width = '250px';
      document.getElementById('main').style.marginLeft = '250px';
    }

    function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
      document.getElementById('main').style.marginLeft = '0';
    }
  </script>
    
</body>
</html>
