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
<form action="calculator.php" method="get">
    Number 1: <input type="number" name="number1">
    <br>
    Number 2: <input type="number" name="number2">
    <br>
    <input type="submit">
</form>

<?php
echo "Result of operation is: ";
echo $_GET["number1"] + $_GET["number2"];
?>

</body>
</html>


