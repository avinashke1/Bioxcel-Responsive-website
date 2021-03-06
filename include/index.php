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

<body>
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
					<li class="active"><a href="http://localhost:8080/registerphp/index.php">Home</a></li>
					<li><a href="#">About</a></li>
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
		<div class="col-lg-6 col-sm-5">
			<a href="#"><img src="img/bioxcel.jpg" alt="Wisdom Pets. click for home." class="img-responsive" style="width:250px;height:128px;"></a>
		</div>
		<div class="col-lg-6 col-sm-7">	
			<img src="img/animals.jpg" alt="" class="img-responsive">
		</div>
	</header>

	<?php
	session_start();
	if(isset($_SESSION['email']))
	{
		?>
	<!-- row 2 -->
	<div class="jumbotron">

		<img src="img/jumbotron.jpg" alt="" class="pull-right img-responsive img-thumbnail">
	    <h1> We treat your pets like our own</h1>
	     
	    <p>At Wisdom Pet Medicine, we strive to blend the best in traditional   and alternative healing techniques to diagnose and treat companion   animals, including dogs, cats, birds, reptiles, rodents, and fish. </p>
	</div>    
	<?php
	}
	?>
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
	<div class="row"><!--adding rows-->
		<div class="col-md-3 col-xs-6">
		    <p><img src="img/gsd.jpg" alt="" class="img-responsive img-thumbnail"></p>
		    <h4>Thanks for helping our German Shepherd</h4>
		    <p>During the summer, my German Shorthair Pointer, Tonto, began to have severe redness and itching on his belly and feet. Through diagnostic testing, we learned that Tonto is severely allergic to over a dozen kinds of grass pollens.</p>
		    <p><a href="#" class="btn btn-primary btn-block">Read more >></a></p><!--adding buttons -->
	    </div>
	    <div class="col-md-3 col-xs-6">
		    <p><img src="img/kitten.jpg" alt="" class="img-responsive img-thumbnail"></p>
		    <h4>Our diabetic kitty is better</h4>
		    <p>When Samantha, our sweet kitten, began sleeping all the time and urinating excessively, we brought her to see the specialists at Wisdom. After running a blood test, Dr. Winthrop confirmed what we all feared – Samantha was showing signs of diabetes. </p>
		    <p><a href="#" class="btn btn-primary btn-block">Read more >></a></p>
	    </div>
	    <div class="col-md-3 col-xs-6">
			<p><img src="img/bulldog.jpg" alt="" class="img-responsive img-thumbnail"></p>
		    <h4>Our grape-loving dog</h4>
		    <p>The staff at Wisdom worked tirelessly to determine why our three-year old bulldog, Roxie, started going into sudden kidney failure. They stabilized her and provided fluids until her kidneys were again functioning normal, but it was still a mystery as to what caused her health to decline so quickly. </p>
		    <p><a href="#" class="btn btn-primary btn-block">Read more >></a></p>
	    </div>
	    <div class="col-md-3 col-xs-6">
		    <p><img src="img/goldfish.jpg" alt="" class="img-responsive img-thumbnail"></p>
		    <h4>A dog antibiotic cured our fish</h4>
		    <p>Wisdom Pet Medicine is the only clinic around that will even book pet fish for appointments. When our 13-year old goldfish, McAllister, turned from silvery white to an angry red, we called around, urgently trying to find a veterinarian who could help. Wisdom not only got us in the same day, but also was able to diagnose McAllister as having a severe case of septicemia. </p>
		     <p><a href="#" class="btn btn-primary btn-block">Read more >></a></p>
	     </div>
	</div>

	<!-- row 4 -->
	

</div><!--closed container-->
<footer style="background-color: black; color:white;">
	<div class="container">
	     <p><small>This not a real veterinary medicine site, and is not meant to diagnose or offer treatment. Please see your veterinarian for all matters related to your pet's health.</small></p>
		 <p><small>Wisdom Pet Medicine is a training brand owned by lynda.com.</small></p>
	</div></footer>

<!-- javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
