<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php ?>
<form action="inputs.php" method="get">
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
    <input type="submit">
</form>
<br>
Your name is <?php echo $_GET["name"] ?>
<br>
Your age is <?php echo $_GET["age"] ?>

</body>
</html>


