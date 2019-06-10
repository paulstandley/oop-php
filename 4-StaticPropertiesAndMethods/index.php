<?php 
  include "includes/person.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <title>Static</title>
</head>
<body>
  <header class="header-class">
    <h1><img src="../img/pro-icon-1.png" alt="tagname" height="22">  Static Properties And Methods</h1>
  </header>
  <?php 
    echo "<h2 class='text'>Drinking age in the uk is <strong>".Person::$drinkingAge."</strong> and this is a <strong>static</strong> property.</h2>";

    Person::setDrinkingAge(21);

    echo "<h2 class='text'>The new drinking age in the uk is <strong>".Person::$drinkingAge."</strong> and this is changed by a <strong>static</strong> method.</h2>";

    echo "<hr>";

    $person1 = new Person("Paz", "blue", 46);

    echo "<h2 class='text'>Add a none stitic fuction to to call it from a object <strong>".$person1->getDA()."</strong>.</h2>";

  ?>
</body>
</html>