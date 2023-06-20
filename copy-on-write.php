<?php

## Counting references
## $other and $worker point to the same array
## PHP save in a special table the number of references to the array
## after the second assignment, the number of references of the array is 2
## when the number of references is 0, the array is deleted from memory
$worker = array("Fred", 35, "Wilma");
$other = $worker; // array isn't duplicated in memory

## Copy-on-write
## when you change $worker, php will make a new array in memory
## and change $worker to point to the new array
## $other will still point to the old array
$worker [1] = 40; // only $worker is changed
print_r($other); // $other is unchanged
echo "<br>";
print_r($worker); // $worker is changed
echo "<br>";
// check if a variable is set
$s1 = isset($name); // $s1 is false
$name = "Fred";
$s2 = isset($name); // $s2 is true
printf("\n %s", $s2? "true" : "false");

// delete the value of a variable
unset($name);
$s3 = isset($name); // $s3 is false
printf("\n %s", $s3? "true" : "false");

## Casting
$value="1"+2;
$value2=2.5 +"3";
echo "<br>";
echo is_int($value);
echo "<br>";
echo is_float($value2);