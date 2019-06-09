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
  <title>Constutors Destutors</title>
</head>
<body>
  <header class="header-class">
<h1><img src="../img/pro-icon-1.png" alt="tagname" height="22">  Constuctors and Destrutcors</h1>
  </header>
  <?php 
    $person1 = new Person("Paz", "blue", 46);
    echo "<h2 class='text'>Iam <strong>".$person1->name."</strong> with <strong>".$person1->eyeColor."</strong> eyes and iam <strong>".$person1->age."</strong> years old :)</h2>";

    $person2 = new Person("Jimbob", "green", 34);
    echo "<h2 class='text'>Iam ".$person2->name." with ".$person2->eyeColor." eyes and iam ".$person2->age." years old :)</h2>";
  
    $person2->setName("Jimmy");

    echo "<h2 class='text'>Iam <strong>".$person2->name."</strong> with <strong>".$person2->eyeColor."</strong> eyes and iam <strong>".$person2->age."</strong> years old :)</h2>";

    echo "<h2 class='text'>Hello <strong>".$person1->getName()."</strong> this is <strong>".$person2->getName()."</strong></h2><hr>";
    // distroy an object
    //$object = new Person();
    //unset($object);

  ?>
</body>
</html>