<?php 
 	session_start();
	
	$connection = mysql_connect("localhost", "root", "", "project");
	if(!$connection){
		die("Could not connect:" . mysql_error());
	}

	mysql_select_db("project");

	//This function will log the user in, set his data to session.
	 if(isset($_POST['definition'])){
	 	$definition = $_POST['definition'];
	 	$userId     = $_SESSION['id'];
	 	$subjectId  = $_POST['subject'];
	 	$sql      = "INSERT INTO definitions (user_id, subject_id, definition) VALUES ('$userId','$subjectId', '$definition')";
	 	mysql_query($sql, $connection);
	 }			

	header("Location: /danica/myDefinitions.php");

 ?>