<?php

session_start();

if ($_SESSION['login'] != true) {
  header("Location: /session/login.php");
  exit();
}

$say = "Hello {$_SESSION['username']}";

?>

<html>

<body>
  <h1>Member</h1>
  <p><?php echo $say; ?></p>
  <a href="/session/logout.php">Logout</a>
</body>

</html>