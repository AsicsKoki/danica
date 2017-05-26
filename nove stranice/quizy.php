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
       <title>PHP Quiz</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" type="text/css"  href="css/home.css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
              <div class="container">
                <ul class="nav navbar-nav navbar-left">
                    <li class="logo"><img src="img/logo_small.png"></li>
                    <li><a href="home2.php">Home</a></li>
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
                    <li class="dropdown active"> 
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

	<div id="page-wrap">

		<h1>Proveri svoje znanje</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>Biologija je...</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) nauka koja se bavi izucavanjem biljaka i zivotinja </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) nauka koja se bavi izucavanjem stena</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Nauka koja se bavi teoremama</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) Nista od ponudjenog</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Fizika je...</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)  Nauka koja se bavi experimentima</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Nauka koja se bavi teoremama</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)  Nauka koja se bavi astrologijom</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)  Nista od ponudjenog</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Matematika je...</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Nauka koja se bavi teoremama</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Nauka koja se bavi amebama</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Nauka koja se bavi crnim rupama</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Nista od ponudjenog</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Oscilacije su...</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Nauka koja se bavi muzikom</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Vreme za koje se promeni polozaj</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Nista od ponudjenog</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Period oscilovanja (T) je vreme za koje se izvrši jedna cela oscilacija. T </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Celija je...</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Sve od ponudjenog</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)Osnovna jedinica gradje svih zivih organizama</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Ćelije su najmanje gradivne jedinice </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D)  Celiju je otkrio Robert Huk </label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
		</form>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>
</html>	