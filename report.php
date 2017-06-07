<?php 
 	session_start();

	$connection = mysql_connect("localhost", "root", "", "project");
	if(!$connection){
		die("Could not connect:" . mysql_error());
	}


	$to = "danicaozb@gmail.com";
	$subject = "Definition reported" . $_POST['definitionId'];
	$txt = "Definition with the number" . $_POST['definitionId'] . "has been reported.";
	$headers = "From: support@Learnicious.com" . "\r\n";

	mail($to,$subject,$txt,$headers);

	return "123";

 ?>