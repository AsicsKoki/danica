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
	$subjectId   = $_GET['subjectId'];

 	$sqlDefinitions     = "SELECT definitions.*, subject_name, username FROM definitions INNER JOIN subjects ON definitions.subject_id = subjects.id INNER JOIN users ON definitions.user_id = users.id WHERE subject_id = '$subjectId'";
 	$definitions       		= mysql_query($sqlDefinitions, $connection) or die(mysql_error());


 	$sqlQuestions     = "SELECT questions.*, subject_name, username FROM questions INNER JOIN subjects ON questions.subject_id = subjects.id INNER JOIN users ON questions.user_id = users.id WHERE subject_id = '$subjectId'  ORDER BY RAND() LIMIT 10";
 	$questions       		= mysql_query($sqlQuestions, $connection) or die(mysql_error());


 	$sqlSubjects = "SELECT * FROM subjects";
 	$subjects = mysql_query($sqlSubjects, $connection) or die(mysql_error());
 	$sqlSubjectsName = "SELECT * FROM subjects WHERE id='$subjectId'";
 	$subjectName = mysql_query($sqlSubjectsName, $connection);
 	$subjectNamee = mysql_fetch_assoc($subjectName);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Test your knowledge - Learnicious</title>
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
				        <li class="active"><a href="testyourk.php">Test your knowledge</a></li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				    	<li class="dropdown">    
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
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 content">
					<br/>
					<center><h3>Test from <?php echo $subjectNamee['subject_name'] ?> !</h3></center><br/>
					<form>
					<ol>
					<?php

					 	while($question = mysql_fetch_assoc($questions)) {
							?>
						<li><?php echo $question['question']; ?><br/>
							<input type="radio" value="<?php echo $question['correct_answer']; ?>" name="<?php echo $question['id']; ?>" > <?php echo $question['correct_answer'];?> <br>
							<input type="radio" value="<?php echo $question['answer1']; ?>" name="<?php echo $question['id']; ?>" > <?php echo $question['answer1'];?> <br>
							<input type="radio" value="<?php echo $question['answer2']; ?>"name="<?php echo $question['id']; ?>" > <?php echo $question['answer2'];?>
							<br/><span style="color:#3399ff;"> - question by <?php echo $question['username'] ?></span><a class="pull-right definition" data-id = "<?php echo $question['id']; ?>" style="color:#3399ff; font-weight: bold;">REPORT QUESTION</a></li><br/>
						<?php
					 	}
					?>
					</ol>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript">

		$(".definition").click(function(e){
			alert('Definition reported!');
			e.preventDefault();
			var definitionId = $(this).data('id');
			var emailid = 'danicaozb@gmail.com',
		    data = { 
		    	email: emailid,
    		 	definitionId: definitionId 
    		};
			$.ajax({
			           type: "POST",
			           url: "report.php",
			           data: data,
			           dataType: "text"
			});
		});
	
		</script>
	</body>
</html>