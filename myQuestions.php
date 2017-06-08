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

 	$sqlQuestions		= "SELECT questions.*, subject_name FROM questions INNER JOIN subjects ON questions.subject_id = subjects.id WHERE user_id = '$uid'";
 	$questions       		= mysql_query($sqlQuestions, $connection) or die(mysql_error());

 	$sqlSubjects = "SELECT * FROM subjects";
 	$subjects = mysql_query($sqlSubjects, $connection) or die(mysql_error());

?>
<!DOCTYPE html>
<html>
	<head>
		<title>My Questions - Learnicious</title>
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
							<li><a href="#">Favourites</a></li> 
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
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 content">
				<h3>Your created questions:</h3>
					<ol>
					<?php

					 	while($question = mysql_fetch_assoc($questions)) {
							?>
							<li><span class="plavaSlova">Question: </span><?php echo $question['question']; ?>
							<br/><span class="plavaSlova">Correct answer: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span><?php echo $question['correct_answer']; ?>
							<br/><span class="plavaSlova">First incorrect answer: &nbsp&nbsp&nbsp&nbsp&nbsp</span><?php echo $question['answer1']; ?>
							<br/><span class="plavaSlova">Second incorrect answer: </span><?php echo $question['answer2']; ?>
							 - <?php echo $question['subject_name'] ?> <?php ?><br/> - <?php  ?> <a href=<?php echo "deleteQuestion.php?questionId=". $question['id']?>> Delete -</a><br/><br/></li>
						<?php
					 	}
					?>
					</ol>
				</div>
				<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<h2 class="news">Create your questions!</h2><br>
					<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
						<form action="postQuestion.php" method="POST">
							<div class="row">
								<select name="subject" class="form-control">
								<?php 

								 	while($subject = mysql_fetch_assoc($subjects)) {
										?>
									<option value='<?php echo $subject['id'] ?>'><?php echo $subject['subject_name'] ?></option>
									<?php
								 	}
								 ?>
								</select>
							</div>
							<br>
							
							<div class="row">
								<textarea id="textQuestion" name="question" placeholder="Write your question here..." rows="3"  class="form-control" required></textarea>
							</div><br/>
							<div class="row">
								<textarea id="correctAnswer" name="correctAnswer"  placeholder="Write CORRECT answer here..." rows="1"  class="form-control" required></textarea>
							</div><br/>
							<div class="row">
								<textarea id="Answer1" name="answer1" placeholder="Write first INCORRECT answer here..." rows="1"  class="form-control" required></textarea>
							</div><br/>
							<div class="row">
								<textarea id="Answer2" name="answer2" placeholder="Write second INCORRECT answer here..." rows="1"  class="form-control" required></textarea>
							</div>
							<br>
							<div class="row">
								<button type="submit" class="pull-right btn">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>	