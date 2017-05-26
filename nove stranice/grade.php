
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
		<title>PHP Quiz</title>
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

<body>

	<div id="page-wrap">

		<h1>Final Quiz for you</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5) { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 5 correct</div>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>