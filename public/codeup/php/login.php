<?php
var_dump($_POST);

if (!empty($_POST)) {
 isset($_POST['username']) ? $_POST['username'] : '';
 isset($_POST['password']) ? $_POST['password'] : '';
  if (strtolower($_POST['username']) == 'guest' && $_POST['password'] == 'password') {
    header('Location: http://codeup.dev/codeup/php/authorized.php');
  } else {
  	echo '<script language="javascript">';
			echo 'alert("Incorrect Username or Password")';
			echo '</script>';
  	}
}
?>
<html>
<body>
  <form action="<?php 'test.php' ?>" method="POST">
  Username: <input type="text" name="username" />
  Password: <input type="password" name="password" />
  <input type="submit" />
  </form>
</body>
</html>
