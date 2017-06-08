<?php

	$connection = mysql_connect("localhost", "root", "", "project");
	if(!$connection){
		die("Could not connect:" . mysql_error());
	}

	mysql_select_db("project");

	$questionId   = $_GET['questionId'];
	$sql  = "DELETE FROM questions WHERE id = '$questionId'";
	$res = mysql_query( $sql, $connection );

	header("Location: /danica/myQuestions.php");

?>