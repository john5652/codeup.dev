<?



function pageController()
{
	$adjetives = ['dirty', 'pretty', 'big', 'small', 'ugly', 'edgy', 'cool', 'hippie', 'rad', 'lame'];
	$nouns = ['John', 'Hat', 'Apple', 'Tyler', 'Devi', 'Ball', 'Dog', 'Cat', 'Dirtbike', 'House'];
	$rand = mt_rand(0, 9);
	// $chosenAdjetive = $adjetives[$rand];
	// $chosenNoun = $nouns[$rand];

    $data = array();

    $data['randomAdjetive'] = $adjetives[$rand];
    $data['randomNoun'] = $nouns[$rand];

    return $data;    
}

// Call the pageController function and extract all the returned array as local variables.
extract(pageController());

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="server-name.css">
	<title> <?=  $randomAdjetive.  $randomNoun . PHP_EOL;  ?> </title>
</head>


<h1 class="bob"> <?  echo $randomAdjetive.  $randomNoun . PHP_EOL;  ?> </h1>

 </html>





