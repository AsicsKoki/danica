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
		<title>Learnicious</title>
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
				        <li class="active"><a href="#">Home</a></li>
				        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="study">Study <b class="caret"></b></a>
				        <ul class="dropdown-menu"> 
								<li><a href="math.php">Math</a></li> 
								<li><a href="biology.php">Biology</a></li>
								<li><a href="physics.php">Physics</a></li>
						</ul>
						</li>
				        <li><a href="quizy.php">Test your knowledge</a></li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				    	<li class="dropdown"> 
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" id="aktivnosti"> My profile <b class="caret"></b></a> 
							<ul class="dropdown-menu"> 
								<li><a href="#">Favourites</a></li> 
								<li><a href="myDefinitions.php">My definitions</a></li>
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
					</br>
					</br>
						<div class="col-md-1 col-lg-1 col-sm-2 col-xs-2 content">
						<section id="rate" class="rating">
				  			<!-- FIFTH STAR -->
				  			<input type="radio" id="heart_5" name="like" value="5" />
					 		<label for="heart_5" title="Five">&#10084;</label>
							<!-- FOURTH HEART -->
							<input type="radio" id="heart_4" name="like" value="4" />
							  <label for="heart_4" title="Four">&#10084;</label>
							  <!-- THIRD HEART -->
							  <input type="radio" id="heart_3" name="like" value="3" />
							  <label for="heart_3" title="Three">&#10084;</label>
							  <!-- SECOND HEART -->
							  <input type="radio" id="heart_2" name="like" value="2" />
							  <label for="heart_2" title="Two">&#10084;</label>
							  <!-- FIRST HEART -->
							  <input type="radio" id="heart_1" name="like" value="1" />
							  <label for="heart_1" title="One">&#10084;</label>
					</section>
					</div>
				</div>
				<div class="col-md-5 col-lg-5 col-sm-12 col-xs-12 h2 news"><a href="connection.php">Vesti iz sveta </a>
						<form>
						<select onchange="showRSS(this.value)" class="rss">
						<option value="" class="rss"><b>Izaberite RSS-feed:</b></option>
						<option value="Google" class="rss"><b>Google News</b></option>
						<option value="NBC" class="rss"><b>NBC News</b></option>
						</select>
						</form>
						<br>
						<br>
						<br>
						<div id="rssOutput">RSS-feed koji izaberete će se pojaviti ovde...</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalPredmet1" tabindex="-1" role="dialog" aria-labelledby="modalPredmet1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div>
						 <div class="tab-content modmodmod" id="slika">
								<div role="tabpanel" class="tab-pane active"><p id="text">Fizika je osnovna fundamentalna prirodna nauka koja proučava osnovna ili suštinska svojstva prirodnih pojava i tela </p>
								</div>
						 </div>
						</div>
					</div>
				</div>
		</div>

		<div class="modal fade" id="modalPredmet2" tabindex="-1" role="dialog" aria-labelledby="modalPredmet2">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div>
						 <div class="tab-content modmodmod" id="predmet2">
								<div role="tabpanel" class="tab-pane active"><p id="text"><b>Matematika se bavi proučavanjem prostora, koji spada u granu matematike.</b></p>
								</div>
						 </div>
						</div>
					</div>
				</div>
		</div>

		<div class="modal fade" id="modalPredmet3" tabindex="-1" role="dialog" aria-labelledby="modalPredmet3">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div>
						 <div class="tab-content modmodmod" id="predmet3">
								<div role="tabpanel" class="tab-pane active"><p id="text"><b>Biologija obuhvata širok spektar nauka i naučnih disciplina</b>
								</p>
								</div>
						 </div>
						</div>
					</div>
				</div>
		</div>

<script>
function showRSS(str) {
  if (str.length==0) { 
    document.getElementById("rssOutput").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("rssOutput").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getrss.php?q="+str,true);
  xmlhttp.send();
}
</script>

	</body>
</html>	