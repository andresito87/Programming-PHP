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
<?php
//Variables
$age= 20;
$name= "Tom";
echo "There once was a man named $name <br>";
echo "He was $age years old <br>";

//Strings
$phrase = "Php Programming Language";
//Decimal number
$floatNum = 30.123;
//Boolean
$isFemale = true;
//Null
$object = null;

echo "To learn $phrase <br>";
echo $floatNum;
echo "<br>";
//String functions
echo strtolower($phrase);
echo "<br>";
$phrase[0]="P";
echo $phrase;
echo "<br>";
echo str_replace("Php", "Java", $phrase);
echo "<br>";
echo substr($phrase, 4, 11);
echo "<br>";
echo strlen($phrase);
echo "<br>";
echo strpos($phrase, "o");
echo "<br>";

//Numbers
echo 5.744;
echo "<br>";
echo 5 + 9;
echo "<br>";
echo 10 % 3;
echo "<br>";
echo 4 + 5 * 10;
echo "<br>";
$num = 10;
$num++;
echo $num;
echo "<br>";
echo $num += 20;
echo "<br>";

//Math functions
echo pow(2, 4);
echo "<br>";
echo sqrt(144);
echo "<br>";
echo max(2, 50);
echo "<br>";
echo min(0, 10);
echo "<br>";
echo round(3.5);
echo "<br>";
echo ceil(3.3);
echo "<br>";
echo floor(3.9);
echo "<br>";
echo abs(-10);
echo "<br>";


?>
</body>
</html>
