<?php
class Person2
{
    var $name = "Fred";
    var $age = 35;
}

$o = new Person2;
$a = (array) $o; // $a is an array with keys name and age

print_r($a);

echo "<br>";

$a = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
$o = (object) $a; // $o is an object with properties name, age and wife
echo $o->name;
echo "<br>";
echo `dir`;