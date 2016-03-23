<?php include("include/db.php");?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>

</head>

<body style="background-color:#350606">
	<div class="container"><!--container is opened>
	<!-- row 0: navigation-->
	<div class="row">
		<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>
			<div class="collapse navbar-collapse" id="collapse">

				<ul class="nav navbar-nav">
					<li><a href="http://localhost:8080/registerphp/index.php">Home</a></li>
					<li><a href="http://localhost:8080/registerphp/about.php">About</a></li>
					<li class="active"><a href="http://localhost:8080/registerphp/services.php">Services</a></li>
				<!--	<li><a href="#>Contact</a></li> -->
					<li><a href="http://localhost:8080/registerphp/contact.php">Contact</a></li>
					
					<!-- opening dropdown -->

					<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register<span class="caret"></span></a>
			          <ul class="dropdown-menu">
			            
			            <li><a href="http://localhost:8080/registerphp/reg.php">SignUp</a></li>
			            <li><a href="http://localhost:8080/registerphp/login.php">Login</a></li>
			            <li><a href="http://localhost:8080/registerphp/logout.php">Logout</a></li>
			            
			          </ul>
			        </li>
				</ul>
				<!-- Search bar starting -->
				<form class="navbar-form navbar-right" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Search">
			        </div>
			        <button type="submit" class="btn btn-default">Submit</button>
      			</form>

      			<!-- Search bar finishing -->
			</div>	
		</nav>		
	</div>	

<header class="page_header">
<div class="page-header">
  <h1 style="color:white;">Services</h1>
</div>
</header>

<div class="para_1" style="color:white;">
Here we offer you a user-friendly and custom design phone accessories too.
<p>



<header class="row">
		<div class="col-lg-6 col-sm-5">
			<a href="#"><img src="img/services2.jpg" alt="Wisdom Pets. click for home." class="pull-right img-responsive img-thumbnail" style="width:700px;height:360px;"></a>
		</div>
</div>	

</div><!--closed container-->


<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
