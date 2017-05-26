<?php 
 	session_start();

 	//check if the user is logggggged in
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Learnicious</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css"  href="css/home.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
			  <div class="container">
			    <ul class="nav navbar-nav navbar-left">
			    	<li class="logo"><img src="img/logo_small.png"></li>
			        <li><a href="home2.php">Home</a></li>
			      <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="study">Study <b class="caret"></b></a>
				        <ul class="dropdown-menu"> 
								<li><a href="math.php">Math</a></li> 
								<li><a href="biology.php">Biology</a></li>
								<li><a href="physics.php">Physics</a></li>
						</ul>
						</li>
			        <li><a href="quizy.php">Test your knowledge</a></li>
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			    	<li class="dropdown active"> 
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="aktivnosti"> My profile <b class="caret"></b></a> 
						<ul class="dropdown-menu"> 
							<li><a href="#">Favourites</a></li> 
							<li><a href="myDefinitions.php">My definitions</a></li>
							<li><a href="logout.php">Log out</a></li>
						</ul>
					</li>
			    </ul>
			  </div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 content">
					<h3>Kreirane definicije:</h3>
					<ol>
						<li>Matematika je....</li>
					</ol>
					</br>
					</br>
						<div class="col-md-1 col-lg-1 col-sm-2 col-xs-2 content">
						<section id="rate" class="rating">
				  			<!-- FIFTH STAR -->
				  			<input type="radio" id="heart_5" name="like" value="5" />
					 		<label for="heart_5" title="Five">&#10084;</label>
							<!-- FOURTH HEART -->
							<input type="radio" id="heart_4" name="like" value="4" />
							  <label for="heart_4" title="Four">&#10084;</label>
							  <!-- THIRD HEART -->
							  <input type="radio" id="heart_3" name="like" value="3" />
							  <label for="heart_3" title="Three">&#10084;</label>
							  <!-- SECOND HEART -->
							  <input type="radio" id="heart_2" name="like" value="2" />
							  <label for="heart_2" title="Two">&#10084;</label>
							  <!-- FIRST HEART -->
							  <input type="radio" id="heart_1" name="like" value="1" />
							  <label for="heart_1" title="One">&#10084;</label>
					</section>
					</div>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<h2  class="news">Kreiraj svoju definiciju!</h2><br>
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
						<form action="myDefinitions.php">
							<div class="row">
								<select>
									<option value="matematika">Matematika</option>
								</select>
							</div>
							<br>
							<div class="row">
								<textarea placeholder="Unesi definiciju..." rows="5" cols="60"></textarea>
							</div>
							<button type="submit" class="pull-right btn">Submit</button>
						</form>
				</div>
			</div>
		</div>
	</body>
</html>	