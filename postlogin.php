<?php 
	
	$connection = mysql_connect("localhost", "root", "", "project");
	if(!$connection){
		die("Could not connect:" . mysql_error());
	}

	mysql_select_db("project");

	//This function will log the user in, set his data to session.
	 if(isset($_POST['username'], $_POST['password'])){
	 	$username = $_POST['username'];
	 	$password = $_POST['password'];
	 	$sql      = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	 	$result   = mysql_query($sql, $connection);
	 	$data     = mysql_fetch_assoc($result);
	 	
	 	session_start();

	 	//Will set user data to session - to refactor in the future!
	 	$_SESSION["username"] = $data['username'];
		$_SESSION["id"]       = $data['id'];
		$_SESSION["last_name"]= $data['last_name'];
		$_SESSION["first_name"]= $data['first_name'];
		$_SESSION["email"]= $data['email'];
		$_SESSION["date_joined"]= $data['date_joined'];
		header("Location: /danica/home.php");
		exit();
	 } else {
	 	$msg = "Wrong username, or password!";
	 	echo $msg;
	 	//PROVERITI ERROR LOG ne radi
	 }			


 ?>