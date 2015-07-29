<?php 
require_once "../../../input.php"; 
	var_dump($_GET); 
	include 'functions.php';

	if (Input::has('counter')) {
		$count=inputGet('counter') ;
    	if(inputGet('value') == 'up') {
	    	$count++;
	    }elseif (Input::get('value') == 'down'){
	    	echo '<script language="javascript">';
			echo 'alert("GAME OVER")';
			echo '</script>';
			$count=0;
	    } 
	}else {
		$count = 0;
	} 
?>
<html>
<head>

</head>
<body>
   <a href="pong.php?value=up&counter=<?=$count;?>">Hit</a>
   <a href="ping.php?value=down&counter=<?=$count;?>">Miss</a>
  <h2><?= $count; ?>  </h2>
</body>
</html>
		
	   


	       