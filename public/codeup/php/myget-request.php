<?php 
	var_dump($_GET); 
	$name = 'Johantahn';
	$date = date('Y-m-d');
 ?>

 <html>
 <head>
 	<title>GET Requests</title>
 </head>
 <body>
 	<a href="?name=<?= $name; ?> &date=<?=$date; ?>"> My Name and Todays Date</a>
 	<br>
 	<a href="http://duckduckgo.com/youtube.com">Youtube</a>
 </body>
 </html>
