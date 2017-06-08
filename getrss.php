
							<?php
							//get the q parameter from URL
							$q=$_GET["q"];

							//find out which feed was selected
							if($q=="Google") {
							  $xml=("https://news.google.com/news/section?cf=all&ned=us&topic=snc&siidp=d948afe5771f154a8451700c1d173f05fb0b&ict=ln/news?ned=us&topic=h&output=rss");
							} elseif($q=="NBC") {
							  $xml=("http://rss.msnbc.msn.com/id/3032091/device/rss/rss.xml");
							}

							$xmlDoc = new DOMDocument();
							$xmlDoc->load($xml);

							//get elements from "<channel>"
							$channel=$xmlDoc->getElementsByTagName('channel')->item(0);
							$channel_title = $channel->getElementsByTagName('title')
							->item(0)->childNodes->item(0)->nodeValue;
							$channel_link = $channel->getElementsByTagName('link')
							->item(0)->childNodes->item(0)->nodeValue;
							$channel_desc = $channel->getElementsByTagName('description')
							->item(0)->childNodes->item(0)->nodeValue;

							//output elements from "<channel>"
							echo("<p><a href='" . $channel_link . "'>" . $channel_title . "</a>");
							echo("<br>");
							echo($channel_desc . "</p>");

							//get and output "<item>" elements
							$x=$xmlDoc->getElementsByTagName('item');
							for ($i=0; $i<=2; $i++) {
							  $item_title=$x->item($i)->getElementsByTagName('title')
							  ->item(0)->childNodes->item(0)->nodeValue;
							  $item_link=$x->item($i)->getElementsByTagName('link')
							  ->item(0)->childNodes->item(0)->nodeValue;
							  $item_desc=$x->item($i)->getElementsByTagName('description')
							  ->item(0)->childNodes->item(0)->nodeValue;
							  echo ("<p><a href='" . $item_link . "'>" . $item_title . "</a>");
							  echo ("<br>");
							  echo ($item_desc . "</p>");
							}
							?>















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
								<div role="tabpanel" class="tab-pane active"><p id="text">Matematika se bavi proučavanjem prostora, koji spada u granu matematike.</p>
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