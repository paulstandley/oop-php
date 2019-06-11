<?php 
  include "includes/users.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <title>PHP</title>
</head>
<body>
  <header class="header-class">
    <h1><img src="../img/pro-icon-1.png" alt="tagname" height="22">  Initialise Object Propertiess</h1>
  </header>
  <?php 
    //$first = "John";
    //$user = new Users($first);
    //echo $user->first;
    $users = new Users('Melissa', "Harper", "Blond", "Blue");
    echo "<h2 class='text'><strong>$users->first $users->last</strong> is so cool with <strong>$users->hairColor</strong> hair and <strong>$users->eyeColor</strong> eyes.</h2>";
    echo "<br>";
    echo "<h2 class='text'>".$users->fullName()."</h2>"
  ?>
</body>
</html>