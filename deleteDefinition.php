<?php

	$connection = mysql_connect("localhost", "root", "", "project");
	if(!$connection){
		die("Could not connect:" . mysql_error());
	}

	mysql_select_db("project");

	$definitionId   = $_GET['definitionId'];
	$sql  = "DELETE FROM definitions WHERE id = '$definitionId'";
	$res = mysql_query( $sql, $connection );

	header("Location: /danica/myDefinitions.php");

?>