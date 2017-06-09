<?php 
 	session_start();

	$connection = mysql_connect("localhost", "root", "", "project");
	if(!$connection){
		die("Could not connect:" . mysql_error());
	}

	mysql_select_db("project");

 	//check if the user is logggggged in
	if(!isset($_SESSION['username'])){
		header("Location: /danica/index.php");
	}
	$uid = $_SESSION["id"];

 	$sqlFavourited     = "SELECT favourites.*, definition, definitions.id, subject_name FROM favourites INNER JOIN (definitions INNER JOIN subjects ON definitions.subject_id = subjects.id) ON favourites.definition_id = definitions.id WHERE favourites.user_id = '$uid' ORDER BY favourites.id DESC";
 	$favourited   		= mysql_query($sqlFavourited, $connection) or die(mysql_error());



 	$sqlSubjects = "SELECT * FROM subjects";
 	$subjects = mysql_query($sqlSubjects, $connection) or die(mysql_error());

?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Definitions - Learnicious</title>
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
			        <li><a href="home.php">Home</a></li>
			        <li><a href="study.php">Study</a></li>
			        <li><a href="testyourk.php">Test your knowledge</a></li>
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			    	<li class="dropdown active"> 
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="aktivnosti"> My profile <b class="caret"></b></a> 
						<ul class="dropdown-menu"> 
							<li><a href="myFavourites.php">Favourites</a></li> 
							<li><a href="myDefinitions.php">My definitions</a></li>
							<li><a href="myQuestions.php">My questions</a></li>
							<li><a href="logout.php">Log out</a></li>
						</ul>
					</li>
			    </ul>
			  </div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 content">
				<center><h3>Your favourited definitions:</h3></center><br/>
					<ol>
					<?php

					 	while($favouritedd = mysql_fetch_assoc($favourited)) {
							?>
							<li>
							<span class="plavaSlova">Subject: </span><?php echo $favouritedd['subject_name'] ?><br/>
							<?php echo $favouritedd['definition']; ?><br/><br/><br/></li>
						<?php
					 	}
					?>
					</ol>
				</div>
				
			</div>
		</div>
	</body>
</html>	