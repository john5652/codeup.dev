<?php 
	var_dump($_GET); 
	if(isset($_GET['counter'])) {
		 $count=$_GET['counter'];
	    if (!empty($_GET)){
	    	if($_GET['value'] == 'up') {
	    	$count++;
	    	}elseif ($_GET['value'] == 'down'){
	    	$count -=1;
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
   <a href="?value=up&counter=<?=$count;?>">Up</a>
   <a href="?value=down&counter=<?=$count;?>">Down</a>
  <h2><?= $count; ?>  </h2>
	       
</body>
</html>

		

	            




	

    
        


                   