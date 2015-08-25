<?php 

require_once '../../../MYsql/input.php';
require_once '../../../MYsql/includes/parks_config.php';
require_once '../../../MYsql/includes/db_connect.php';

$limit = 4;
$count = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();
$numPages = ceil($count / $limit);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * 4;
$nextPage = $page + 1;
$prevPage = $page - 1;
$stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset ");


$stmt->bindvalue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindvalue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// if ($_POST) {
//     if (!empty($_POST['name']) && !empty($_POST['location']) && !empty($_POST['date_established']) && !empty($_POST['area_in_acres']) ) {
//     $stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');
//         $stmt->bindValue(':name',  $_POST['name'],  PDO::PARAM_STR);
//         $stmt->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
//         $stmt->bindValue(':date_established', date('Y-m-d', strtotime($_POST['date_established'])), PDO::PARAM_STR);
//         $stmt->bindValue(':area_in_acres', $_POST['area_in_acres'], PDO::PARAM_STR);
//         $stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);
//         $stmt->execute();
//     }
// }

$errors = [];
if(!empty($_POST)){
    $insertQuery = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
            VALUES (:name, :location, :date_established, :area_in_acres, :description)";
    $stmt = $dbc->prepare($insertQuery);
        //prepare database to run query
    try {
    // Create a person
        $name = Input::getString('name');
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
    } catch (Exception $e) {
            // Report any errors
        $errors[] = $e->getMessage();
    }
    try {
    // Create a person
        $location = Input::get('location');
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
    } catch (Exception $e) {
            // Report any errors
        $errors[] = $e->getMessage();
    } 
    try {
    // Create a person
        $date = Input::getDate('date_established');
        $stmt->bindValue(':date_established', $date, PDO::PARAM_STR);
    } catch (Exception $e) {
            // Report any errors
        $errors[] = $e->getMessage();
    } 
    try {
    // Create a person
        $area = Input::getNumber('area_in_acres');
        $stmt->bindValue(':area_in_acres', $area, PDO::PARAM_STR);
    } catch (Exception $e) {
            // Report any errors
        $errors[] = $e->getMessage();
    } 
    try {
    // Create a person
        $description = Input::getString('description');
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
    } catch (Exception $e) {
            // Report any errors
        $errors[] = $e->getMessage();
    } 
    
    if(empty($errors)){
        $stmt->execute();
    }
}

?>

<html>
<head>
	<title>National Parks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">
	// <script>
	// 	$(function() {
	// 	$( "#datepicker" ).datepicker();
	// 	});
	// </script>

</head>
<body>
	<h1>National Parks</h1>
	<table class = 'table table-striped'>

			<td> <h3> Name </h3> </td>
			<td><h3> Location </h3></td>
			<td><h3> Date Established </h3></td>
			<td><h3> Area in acres </h3></td>

		<?foreach ($parks as $park) { ?>
		<tr>
			<td class="info"><?= $park['name'];  ?></td>
			<td class="info"><?= $park['location'];  ?></td>
			<td class="info"><?= $park['date_established'];  ?></td>
			<td class="info"><?= $park['area_in_acres']; } ?></td>
		</tr>
	</table>

	<ul class="pager">
	  
	  <?if ($page != 1) : ?>
	    <li><a href="http://codeup.dev/codeup/php/national_parks.php?page=<?= $prevPage; ?>">Previous</a></li>
	  <? endif; ?>	
	  <? if ($page < $numPages) : ?>
	    <li><a href="http://codeup.dev/codeup/php/national_parks.php?page=<?= $nextPage; ?>">Next</a></li>
	  <?endif; ?>
  	</ul>

	<div class="container">
		<?php foreach ($errors as $error) : ?>
		<p id="error messages"><?= $error; ?></p>
		<?php endforeach; ?>

<form method="POST">
	<div class="col-md-3">
		<div class='form-group'>
			<input name="name" type="text" placeholder="Park Name"> 
		</div>
	</div>

	<div class='col-md-3'>
		<div class='form-group '>
			<input name="location" type="text" placeholder="Location">
		</div> 
	</div>

	<div class='col-md-3'>
		<div class='form-group'>
			<input name="date_established" id='datepicker' type="text" placeholder="Date Est. yyyy-mm-dd"> 
		</div>
	</div>

	<div class='col-md-3'></div>
		<div class='form-group'>
			<input name="area_in_acres" type="text" placeholder="Acreage"> 
		</div>
	</div>

	<textarea class='col-md-12' class="form-group" rows="3"  name="description" placeholder="Description"></textarea> 
	<div>
		<button class'pager' class="btn btn-info" type="submit">Submit</button>
	</div>
	</form>

</body>
</html>