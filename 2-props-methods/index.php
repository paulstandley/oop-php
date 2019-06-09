<?php 
  include "includes/person.inc.php";
  $person = new Person;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <title>PropsMethods</title>
</head>
<body>
  <header class="header-class">
    <h1><img src="../img/pro-icon-1.png" alt="tagname" height="22">  Properties and Methods</h1>
  </header>
  <?php 
    $person1 = new Person();
    $person1->setName("<h2 class='text'>Paul Standley</h2>");
    echo $person1->name;
  ?>
</body>
</html>