<?php 
 	session_start();
	
	$connection = mysql_connect("localhost", "root", "", "project");
	if(!$connection){
		die("Could not connect:" . mysql_error());
	}

	mysql_select_db("project");

	//This function will log the user in, set his data to session.
	 if(isset($_POST['question'])){
	 	$question = $_POST['question'];
	 	$correctAnswer = $_POST['correctAnswer'];
	 	$answer1 =  $_POST['answer1'];
	 	$answer2 =  $_POST['answer2'];
	 	$userId     = $_SESSION['id'];
	 	$subjectId  = $_POST['subject'];
	 	$sql      = "INSERT INTO questions (user_id, subject_id, question, correct_answer, answer1, answer2) VALUES ('$userId','$subjectId', '$question', '$correctAnswer', '$answer1', '$answer2')";
	 	mysql_query($sql, $connection);
	 }			

	header("Location: /danica/myQuestions.php");

 ?>