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

 	$sqlDefinitions     = "SELECT definitions.*, subject_name FROM definitions INNER JOIN subjects ON definitions.subject_id = subjects.id WHERE user_id = '$uid'";
 	$definitions       		= mysql_query($sqlDefinitions, $connection) or die(mysql_error());


 	$sqlQuestions     = "SELECT questions.*, subject_name, username FROM questions INNER JOIN subjects ON questions.subject_id = subjects.id INNER JOIN users ON questions.user_id = users.id ORDER BY RAND() LIMIT 10";
 	$questions       		= mysql_query($sqlQuestions, $connection) or die(mysql_error());


 	$sqlSubjects = "SELECT * FROM subjects";
 	$subjects = mysql_query($sqlSubjects, $connection) or die(mysql_error());

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home - Learnicious</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css"  href="css/home.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div>
			<nav class="navbar navbar-default">
				  <div class="container">
				    <ul class="nav navbar-nav navbar-left">
				    	<li class="logo"><img src="img/logo_small.png"></li>
				        <li><a href="home.php">Home</a></li>
				        <li><a href="study.php">Study</a></li>
				        <li class="active"><a href="#">Test your knowledge</a></li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				    	<li class="dropdown"> 
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
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 content">
					<h3>Test your knowledge, take a quick test!</h3>
					<form>
						<ol>
					<?php

					 	while($question = mysql_fetch_assoc($questions)) {
							?>
							<li><?php echo $question['question']; ?><br/>
							<input type="radio"  value="<?php echo $question['id']; ?>" name="<?php echo $question['id']; ?>"> <?php echo $question['correct_answer'];?> <br>
							<input type="radio"  value="<?php echo $question['id']; ?>" name="<?php echo $question['id']; ?>"> <?php echo $question['answer1'];?> <br>
							<input type="radio"  value="<?php echo $question['id']; ?>" name="<?php echo $question['id']; ?>"> <?php echo $question['answer2'];?>
							<br/><span style="color:#3399ff;"> - question by <?php echo $question['username'] ?></span><a class="pull-right definition" data-id = "<?php echo $question['id']; ?>" style="color:#3399ff; font-weight: bold;"><img src="img/report.png"/></a></li><br/>
						<?php
					 	}
					?>
					</ol>
					</form>
				</div>
				<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 news">
					<h3><b>Choose a subject for testing your knowledge:</b></h3><br/>
					<?php

					 	while($subject = mysql_fetch_assoc($subjects)) {
							?>
							<li id="belaPozadina">
								<a class="plavaSlova" href=<?php echo "doatest.php?subjectId=". $subject['id']?>>
									<b><?php echo $subject['subject_name']; ?></b>
								</a>

							</li>
							
							<p><?php echo $subject['subject_description']; ?><?php  ?><br/><br/></p>
						<?php
					 	}
					?>
				</div>
			</div>
		</div>
	</body>
</html>	