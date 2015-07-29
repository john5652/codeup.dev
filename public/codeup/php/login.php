<?php
var_dump($_POST);
include 'functions.php';

session_start();
$sessionId = session_id();
$_SESSION['Logged_In'] = false;

if ($_SESSION['Logged_In']) {
    header('Location: http://codeup.dev/codeup/php/authorized.php');
    exit();
}
 

 if (!empty($_POST)) {
    $username = trim(inputGet('username'));
    $password = inputGet('password');

    if (strtolower($username) == 'guest' && $password == 'password') {
        $_SESSION['Logged_In'] = true;
        $_SESSION['Username'] = $_POST['username'];
        header('Location: http://codeup.dev/codeup/php/authorized.php');
        exit();
    } else {
        echo '<script language="javascript">';
        echo 'alert("Incorrect Username or Password")';
        echo '</script>';
        $_SESSION['Logged_In']=false;
    }
}

?>
<html>
<body>
  <form action="login.php" method="POST">
  Username: <input type="text" name="username" />
  Password: <input type="password" name="password" />
  <input type="submit" />
  </form>
</body>
</html>