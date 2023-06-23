<?php

$turu = "Hello my name is " . htmlspecialchars($_GET['name']);

// http://localhost:8080/index.php?name=%3Cscript%3Ealert(%22Hello%20World%22)%3C/script%3E
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1><?= $turu ?></h1>
</body>

</html>