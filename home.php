<?php 
 	session_start();

 	//check if the user is logggggged in
	if(!isset($_SESSION['username'])){
		header("Location: index.php");
	
			
			    	}
			    	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home - Learnicious</title>
		<meta charset="utf-8">
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
				        <li class="active"><a href="home.php">Home</a></li>
				        <li><a href="study.php">Study</a></li>
				        <li><a href="testyourk.php">Test your knowledge</a></li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				    	<li class="dropdown"> 
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="aktivnosti"> My profile <b class="caret"></b></a> 
							<ul class="dropdown-menu"> 
								<li><a href="myFavourites.php">Favourites</a></li> 
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
				<div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 content">
					<h2>Dobrodošli na sajt Learnicious!</h2>
					<br>
					<h4>Predmeti koje ste ucili prethodni put:</h4>
					<div id="predmet1" class="predmet" data-toggle="modal" data-target="#modalPredmet1"><center>Fizika</center></div><br>
					<div id="predmet2" class="predmet" data-toggle="modal" data-target="#modalPredmet2"><center>Matematika</center></div><br>
					<div id="predmet3" class="predmet" data-toggle="modal" data-target="#modalPredmet3"><center>Biologija</center></div><br>
					<h4>Vase omiljene definicije:</h4>
					<ol>
						<li>Biologija (od grčkog bios=život i logos=nauka, znanje) je, najšire rečeno, kompleks nauka o životu. Biologija obuhvata širok spektar nauka i naučnih disciplina, koje proučavaju živa bića, njihovu strukturu, životne funkcije i manifestacije, ponašanje i ekološke odnose, kao i čitavu biosferu. <br>Iz predmeta: Biologija</li>
						<li>Biologija (od grčkog bios=život i logos=nauka, znanje) je, najšire rečeno, kompleks nauka o životu. Biologija obuhvata širok spektar nauka i naučnih disciplina, koje proučavaju živa bića, njihovu strukturu, životne funkcije i manifestacije, ponašanje i ekološke odnose, kao i čitavu biosferu.
						<br>Iz predmeta: Biologija</li>
						<li>Biologija (od grčkog bios=život i logos=nauka, znanje) je, najšire rečeno, kompleks nauka o životu. Biologija obuhvata širok spektar nauka i naučnih disciplina, koje proučavaju živa bića, njihovu strukturu, životne funkcije i manifestacije, ponašanje i ekološke odnose, kao i čitavu biosferu.
						<br>Iz predmeta: Biologija</li>
						<li>Biologija (od grčkog bios=život i logos=nauka, znanje) je, najšire rečeno, kompleks nauka o životu. Biologija obuhvata širok spektar nauka i naučnih disciplina, koje proučavaju živa bića, njihovu strukturu, životne funkcije i manifestacije, ponašanje i ekološke odnose, kao i čitavu biosferu.
						<br>Iz predmeta: Biologija</li>
						<li>Biologija (od grčkog bios=život i logos=nauka, znanje) je, najšire rečeno, kompleks nauka o životu. Biologija obuhvata širok spektar nauka i naučnih disciplina, koje proučavaju živa bića, njihovu strukturu, životne funkcije i manifestacije, ponašanje i ekološke odnose, kao i čitavu biosferu.
						<br>Iz predmeta: Biologija</li>
					</ol>
				</div>
				<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 h2 news">Vesti iz sveta nauke
				
				<iframe width="400" height="400" style="border:none;" src="http://output48.rssinclude.com/output?type=iframe&amp;id=1142597&amp;hash=c9bd42030ea4f7a8ffbf91c0570127c2"></iframe>
				

					</div>
</div>
		<div class="modal fade" id="modalPredmet1" tabindex="-1" role="dialog" aria-labelledby="modalPredmet1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					
					
					<div>
						
						  <div class="tab-content modmodmod" id="slika">
							<div role="tabpanel" class="tab-pane active"><p>Biologija (od grčkog bios=život i logos=nauka, znanje) je, najšire rečeno, kompleks nauka o životu. Biologija obuhvata širok spektar nauka i naučnih disciplina, koje proučavaju živa bića, njihovu strukturu, životne funkcije i manifestacije, ponašanje i ekološke odnose, kao i čitavu biosferu.</p></div>
							
						  </div>
						</div>
					</div>
				</div>
			</div>

	</body>
</html>	