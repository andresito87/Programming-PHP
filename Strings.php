<?php
# print_r VS var_dump
print_r(true); // prints "1";
echo "<br>";
print_r(false); // prints "";
echo "<br>";
print_r(null); // prints "";
echo "<br>";
var_dump(true);
echo "<br>";
var_dump(false);
echo "<br>";
var_dump(null);
echo "<br>";
var_dump(array('name' => "Fred", 'age' => 35));
class P {
    var $name = 'Nat';
    // ...
}
$p = new P;
echo "<br>";
var_dump($p);
echo "<br>";
$string = 'Hello, world';
$length = strlen($string); // $length is 12
print_r($length);
?>


<?php
# Comparing Strings
$o1 = 3;
$o2 = "3";
echo "<br>";
if ($o1 == $o2) {
    echo("== returns true<br>");
}
if ($o1 === $o2) {
    echo("=== returns true<br>");
}

$n = strcmp("PHP Rocks", 5);
echo($n); // prints 1 are not equal
echo "<br>";
$n = strcasecmp("Fred", "frED");
echo($n); // prints 0 are equal

# String Functions(similar_text)
echo "<br>";
$string1 = "Rasmus Lerdorf";
$string2 = "Razmus Lehrdorf";
$common = similar_text($string1, $string2, $percent);
printf("They have %d chars in common (%.2f%%).", $common, $percent);
echo "<br>";
# Paddding Strings
$string = str_pad('Fred Flintstone', 50, '.');
echo "{$string}:35:Wilma";
echo "<br>";

# Tokenizing Strings
$string = "Fred,Flintstone,35,Wilma";
$token = strtok($string, ",");

while ($token !== false) {
    echo("{$token}<br />");
    $token = strtok(",");
}

# Parsing URLs
$bits = parse_url("http://me:secret@example.com/cgi-bin/board?user=fred");
print_r($bits);

# Regular Expressions
echo "<br>";
echo preg_match("/^cow/", "Dave was a cowhand")?"true":"false";
echo "<br>";
echo preg_match("/^cow/", "cowabunga!")?"true":"false";
