<?php
  include 'includes/parentclass.inc.php';
  include 'includes/newclass.inc.php';
  $object = new NewClass;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <title>OOP PHP</title>
</head>
<body>
  <header>
    <h1><img src="../img/pro-icon-1.png" alt="tagname" height="22">  OOP PHP</h1>
  </header>
  <?php 
    echo $object->name();
    echo $object->info;
    echo $object->dar;
  ?>
</body>
</html>