<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/style.css">
  <title>PHP</title>
</head>
<body class="calc">
  <header class="header-class">
    <h1><img src="../img/pro-icon-1.png" alt="tagname" height="22">   Simple Calculator</h1>
  </header>
  <form action="calc.php" method="POST" class="calc">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="cal">
      <option value="add">Add</option>
      <option value="sub">Subtract</option>
      <option value="mul">Multiply</option>
    </select>
    <button type="submit">Calculate</button>
  </form>
</body>
</html>