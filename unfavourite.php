<?php
 	session_start();
    
	$connection = mysql_connect("localhost", "root", "", "project");
	if(!$connection){
		die("Could not connect:" . mysql_error());
	}

	mysql_select_db("project");

	$definitionId   = $_POST['definitionId']; 
	$userId = $_SESSION["id"];

	$sql = "DELETE FROM favourites WHERE definition_id = '$definitionId' AND user_id = '$userId'";
	return	mysql_query($sql, $connection);


?>