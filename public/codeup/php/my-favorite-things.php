<? 


 

function pageController()
{
    $i = 0;
    $data = array();

    $data['favorites'] = ['Devi', 'Pizza', 'Gym', 'Sven', 'Coding'];
    $data['i'] = 0;


    // Return the completed data array.
    return $data;    
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());

?>

<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" type="text/css" href="favorite.css"> </head>
<body>

<?	foreach ($favorites as $favorite): 

	$i++;
	if ($i % 2 == 0 ) : ?>

	<table id="table" style="width:100%">
		<?php  else : ?>
		<table style="width:100%">
		<? endif; ?>
	  <tr>
	    <td> <? echo $favorite ?> </td>
	  </tr>
	</table>

<? endforeach; ?>

</body>
</html>