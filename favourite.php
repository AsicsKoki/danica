<?php
 	session_start();
    
	$connection = mysql_connect("localhost", "root", "", "project");
	if(!$connection){
		die("Could not connect:" . mysql_error());
	}

	mysql_select_db("project");

	$definitionId   = $_POST['definitionId']; 
	$userId = $_SESSION["id"];

	$sql = "INSERT INTO favourites (user_id, definition_id) VALUES ('$userId','$definitionId')";
	return	mysql_query($sql, $connection);


?>