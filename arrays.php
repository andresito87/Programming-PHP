<?php
# Array
$person[0] = "Edison";
$person[1] = "Wankel";
$person[2] = "Crapper";

$creator['Light bulb'] = "Edison";
$creator['Rotary Engine'] = "Wankel";
$creator['Toilet'] = "Crapper";

foreach ($person as $name) {
    echo $name . "<br>";
}
echo "<br>";
$person = array("Edison", "Wankel", "Crapper");
$creator = array('Light bulb' => "Edison",
    'Rotary Engine' => "Wankel",
    'Toilet' => "Crapper");

foreach ($person as $name) {
    echo $name . "<br>";
}
echo "<h3>Ordered List</h3>";
sort($person);

foreach ($person as $name) {
    echo $name . "<br>";
}

$numbers = range(2, 5); // $numbers = array(2, 3, 4, 5);
$letters = range('a', 'z'); // $letters holds the alphabet
$reversedNumbers = range(5, 2); // $reversedNumbers = array(5, 4, 3, 2);

$capitals = array(
    'USA' => "Washington",
    'Great Britain' => "London",
    'New Zealand' => "Wellington",
    'Australia' => "Canberra",
    'Italy' => "Rome",
    'Canada' => "Ottawa"
);

$downUnder = array_splice($capitals, 2, 2); // remove New Zealand and Australia
$france = array('France' => "Paris");

array_splice($capitals, 1, 0, $france);
print_r($capitals);
echo "<br>";
$color = "indigo";
$shape = "curvy";
$floppy = "none";

$a = compact("color", "shape", "floppy");
// or
$names = array("color", "shape", "floppy");
$a = compact($names);
print_r($a);

echo "<br>";

$ages = array(
    'Person' => "Age",
    'Fred' => 35,
    'Barney' => 30,
    'Tigger' => 8,
    'Pooh' => 40
);

echo("<table border='1px'>\n<tr><th>Person</th><th>Age</th></tr>\n");

// print the values
foreach ($ages as $person => $age) {
    echo("<tr><td>{$person}</td><td>{$age}</td></tr>\n");
}

// end the table
echo("</table>");
?>
<?php
function userSort($a, $b)
{
 // smarts is all-important, so sort it first
 if ($b == "smarts") {
 return 1;
 }
 else if ($a == "smarts") {
 return -1;
 }

 return ($a == $b) ? 0 : (($a < $b) ? -1 : 1);
}

$values = array(
 'name' => "Buzz Lightyear",
 'email_address' => "buzz@starcommand.gal",
 'age' => 32,
 'smarts' => "some"
);

if ($_POST['submitted']) {
 $sortType = $_POST['sort_type'];

 if ($sortType == "usort" || $sortType == "uksort" || $sortType == "uasort") {
 $sortType($values, "userSort");
 }
 else {
 $sortType($values);
 }
} ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
 <p>
 <input type="radio" name="sort_type"
 value="sort" checked="checked" /> Standard<br />
 <input type="radio" name="sort_type" value="rsort" /> Reverse<br />
 <input type="radio" name="sort_type" value="usort" /> User-defined<br />
 <input type="radio" name="sort_type" value="ksort" /> Key<br />
 <input type="radio" name="sort_type" value="krsort" /> Reverse key<br />
 <input type="radio" name="sort_type"
 value="uksort" /> User-defined key<br />
 <input type="radio" name="sort_type" value="asort" /> Value<br />
 <input type="radio" name="sort_type"
 value="arsort" /> Reverse value<br />
 <input type="radio" name="sort_type"
 value="uasort" /> User-defined value<br />
 </p>

 <p align="center"><input type="submit" value="Sort" name="submitted" /></p>

 <p>Values <?php echo $_POST['submitted'] ? "sorted by {$sortType}" : "unsorted";
 ?>:</p>

 <ul>
 <?php foreach ($values as $key => $value) {
 echo "<li><b>{$key}</b>: {$value}</li>";
 } ?>
 </ul>
</form>

<?php
// Reversing associative arrays
$u2h = array(
    'gnat' => "/home/staff/nathan",
    'frank' => "/home/action/frank",
    'petermac' => "/home/staff/petermac",
    'ktatroe' => "/home/staff/kevin"
);
$h2u = array_flip($u2h);

$user = $h2u["/home/staff/kevin"]; // $user is now 'ktatroe';
echo "<br>".$user;
?>

 <?php
echo "<br>";
# Ramdomize array
$weekdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday");
print_r($weekdays);
shuffle($weekdays);
print_r($weekdays);

# Filtering arrays
function isOdd ($element) {
    return $element % 2;
}

$numbers = array(9, 23, 24, 27);
$odds = array_filter($numbers, "isOdd");

print_r("<br>The odd numbers are ".implode(",", $odds));