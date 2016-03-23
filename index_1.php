<?php include("include/db.php");?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bioxcel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.js"></script>

    <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>

<body style="background-color:#350606">

	<div class="container"><!--container is opened-->
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
					<li class="active"><a href="http://localhost:8080/registerphp/home.php">Home</a></li>
					<li><a href="http://localhost:8080/registerphp/about.php">About</a></li>
					<li><a href="http://localhost:8080/registerphp/services.php">Services</a></li>
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


	<!-- row 1 -->
	<header class="row">
	<!--	<div class="col-lg-6 col-sm-5">
			<a href="#"><img src="img/bioxcel.jpg" alt="Wisdom Pets. click for home." class="img-responsive" style="width:250px;height:128px;"></a>
		</div> -->
		<!-- <div class="col-lg-6 col-sm-7">	
			<img src="img/fix.jpg" alt="" class="img-responsive">
		</div> -->
	</header>

	<!-- row 2 -->
	<div class="jumbotron" style="background-color:#712B2B">

		<img src="img/bioxcel.jpg" style="width:320px;height:210px;" alt="" class="pull-right img-responsive img-thumbnail">
	    <h1>Welcome to Bioxcel</h1>
	     
	    <p>At Bioxcel, we strive to blend the best in traditional and alternative healing techniques to diagnose and treat companion smartphones.</p>
	</div>    

	<!-- Applying carousel-->

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/nexus.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/xperia.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="img/motorola.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="img/samsung.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



	<!-- Finishing carousel -->


	<!-- row 3 -->
	<p>
	<div class="row" style="color:white;"><!--adding rows-->
		<div class="col-md-3 col-xs-6">
		    <p><img src="img/nexus.jpg" alt="" class="img-responsive img-thumbnail"></p>
		    <h4><b>Nexus</b></h4>
		    <p>Repairing Nexus which have been a headache is just a matter of minutes for us</p>
		   
	    </div>
	    <div class="col-md-3 col-xs-6">
		    <p><img src="img/xperia.jpg" alt="" class="img-responsive img-thumbnail"></p>
		    <h4><b>Xperia Series<b></h4>
		    <p>No Xperia phones exist which can't be repaired from us. Also get the latest firmware update (officially) even its not officially for the selected phone.</p>
		    
	    </div>
	    <div class="col-md-3 col-xs-6">
			<p><img src="img/motorola.jpg" alt="" class="img-responsive img-thumbnail"></p>
		    <h4><b>Moto<b></h4>
		    <p>The new giant is emerging and having a great impact on the users. But nothing is perfect. So here the solutions of every problem of it.</p>
		   
	    </div>
	    <div class="col-md-3 col-xs-6">
		    <p><img src="img/samsung.jpg" alt="" class="img-responsive img-thumbnail"></p>
		    <h4><b>Samsung Series<b></h4>
		    <p>Great big giant in smartphone industries. But also known for many bugs and problems in the device. Get the same feel as the time of opening the newly bought box.</p>
		    
	     </div>
	</div>
	</p>

	<!-- row 4 -->
	

</div><!--closed container-->
<footer style="background-color: black; color:white;">
	<div class="container">
	     <p class="text-muted">Copyright &copy <b>Bioxcel</b></p>
	</div></footer>

<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
