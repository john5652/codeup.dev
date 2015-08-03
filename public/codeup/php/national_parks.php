<?php 

require_once '../../../MYsql/includes/parks_config.php';
require_once '../../../MYsql/includes/db_connect.php';

$limit = 4;
$count = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();
$numPages = ceil($count / $limit);
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$offset = ($page - 1) * 4;
$nextPage = $page + 1;
$prevPage = $page - 1;
$parks = $dbc->query("SELECT * FROM national_parks LIMIT $limit OFFSET $offset ")->fetchAll(PDO::FETCH_ASSOC);

?>

<html>
<head>
	<title>National Parks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
	<h1>National Parks</h1>
	<table class = 'table'>

			<td> <h3> Name </h3> </td>
			<td><h3> Location </h3></td>
			<td><h3> Date Established </h3></td>
			<td><h3> Area in acres </h3></td>

		<?foreach ($parks as $park) { ?>
		<tr>
			<td><?= $park['name'];  ?></td>
			<td><?= $park['location'];  ?></td>
			<td><?= $park['date_established'];  ?></td>
			<td><?= $park['area_in_acres']; } ?></td>
		</tr>
	</table>

	<ul class="pager">
	  <?if($page == 1): ?>
	    <li><a href="http://codeup.dev/codeup/php/national_parks.php?page=<?= $nextPage; ?>">Next</a></li>
	  <? endif; ?>	
	  <?if ($page < $numPages && $page != 1) : ?>
	    <li><a href="http://codeup.dev/codeup/php/national_parks.php?page=<?= $prevPage; ?>">Previous</a></li>
        <li><a href="http://codeup.dev/codeup/php/national_parks.php?page=<?= $nextPage; ?>">Next</a></li>
	  <? endif; ?>	
	  <? if ($page == $numPages) : ?>
	    <li><a href="http://codeup.dev/codeup/php/national_parks.php?page=<?= $prevPage; ?>">Previous</a></li>
	  <?endif; ?>
  	</ul>

</body>
</html>