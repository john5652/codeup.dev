<?php 
var_dump($_GET);
$search = isset($_GET['search']) ? urlencode($_GET['search']) : '';
 ?>
<html>
<body>
  <form action="<?php 'test.php' ?>" method="GET">
  	<a href="http://duckduckgo.com/?q=<?= $search ?>">Search</a>
  	<br>
  Search: <input type="text" name="search" />
  
  <input type="submit" />
  </form>
</body>
</html>
