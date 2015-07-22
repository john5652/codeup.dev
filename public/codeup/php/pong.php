<?php 
	var_dump($_GET); 
	if(isset($_GET['counter'])) {
		 $count=$_GET['counter'];
	    if (!empty($_GET)){
	    	if($_GET['value'] == 'up') {
	    	$count++;
	    	}elseif ($_GET['value'] == 'down'){
	    	echo '<script language="javascript">';
			echo 'alert("GAME OVER")';
			echo '</script>';
			$count=0;
	    	} 
		}	
	}else{
	$count = 0;
	} 
?>
	   

<html>
<head>

</head>
<body>
   <a href="ping.php?value=up&counter=<?=$count;?>">Hit</a>
   <a href="pong.php?value=down&counter=<?=$count;?>">Miss</a>
   <a href="ping.php?value=down&counter=<?=$count;?>">Miss</a>
   <a href="ping.php?value=down&counter=<?=$count;?>">Miss</a>
   <a href="ping.php?value=up&counter=<?=$count;?>">Hit</a>
   <a href="ping.php?value=up&counter=<?=$count;?>">Hit</a>
   <a href="ping.php?value=down&counter=<?=$count;?>">Miss</a>
   <a href="ping.php?value=down&counter=<?=$count;?>">Miss</a>
   <a href="ping.php?value=up&counter=<?=$count;?>">Hit</a>
   <a href="ping.php?value=up&counter=<?=$count;?>">Hit</a>
   <a href="ping.php?value=down&counter=<?=$count;?>">Miss</a>
  <h2><?= $count; ?>  </h2>
	       
</body>
</html>