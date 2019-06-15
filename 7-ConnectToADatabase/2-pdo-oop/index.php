<?php
  include_once "includes/dbh.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/style.css">
  <title>PDO PHP</title>
</head>
<body>
  <header class="header-class">
    <h1><img src="../../img/pro-icon-1.png" alt="tagname" height="22">     PDO OOP PHP</h1>
  </header>
  <?php 
    //print_r(PDO::getAvailableDrivers());
    $object = new Dbh;
    $object->connect();
  ?>
</body>
</html>