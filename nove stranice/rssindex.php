<?php
//Connect to database
include 'connection.php';
//Check if user set limit for rss feed to show limited feed
if(isset($_GET['load']) === true || empty($_GET['load']) === false){
	$load = $_GET['load'];
}else{
//If not set then set it to 10,
	$load = 10;
} 
	//Get posts from database get it by limit
	$query = $pdo->prepare("SELECT * FROM `users` ORDER BY `post_id` LIMIT ?");
	//Bind the $load value to show feed 
	$query->bindValue(1,(int) trim($load), PDO::PARAM_INT);
	//Run the query
	$query->execute();
 
echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<rss version="2.0">
<channel>
	<title>Merlaesson</title>
	<description>Rss Feed</description>
 
	<link>http://www.meralesson.com</link>
	<!-- Get all posts from database --> 
	<?php while($row = $query->fetch(PDO::FETCH_ASSOC)){?>
		<item>
		  <title><?php echo $row['post_title']; ?></title>
 		  <description><?php echo $row['post_description']; ?></description>
		  <link><?php echo $row['post_link'];?></link>
     	</item>
	<?php 
		}	
	?>
</channel>
</rss>
