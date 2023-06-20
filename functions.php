<?php
function strcat($left, $right)
{
    $combinedString = $left . $right;

    return $combinedString;
}

echo strcat("My name is ", "Andrés"); // My name is Andrés

# Function-level scope
$a = 3;
function foo()
{
    $a = 0;
    $a += 2;
}

foo();
echo "<br>" . $a;

# Global keyword and global scope
$a = 3;

function foo2()
{
    global $a;

    $a += 2;
}

foo2();
echo "<br>" . $a;
echo "<br>";


# Passing by reference
function doubler(&$value)
{
    $value *= 2;
    echo "The number of function parameters is: " . func_num_args();
}

$a = 5;
doubler($a);

echo "<br>" . $a;
?>


<?php
# Sum values of function arguments
function countList()
{
    if (func_num_args() == 0) {
        return false;
    } else {
        $count = 0;

        for ($i = 0; $i < func_num_args(); $i++) {
            $count += func_get_arg($i);
        }

        return $count;
    }
}

echo "<br>Sum of parameters function is " . countList(1, 5, 9); // outputs "15"

?>
<?php
function takesTwo($a, $b)
{
    if (isset($a)) {
        echo " a is set\n";
    }

    if (isset($b)) {
        echo " b is set\n";
    }
}

echo "<br>With two arguments:\n";
takesTwo(1, 2);

echo "<br>With one argument:\n";
takesTwo(1, 3);
?>
<?php

class Entertainment
{
}

class Clown extends Entertainment
{
}

class Job
{
}

function handleEntertainment(Entertainment $a, callable $callback = NULL)
{
    echo "Handling " . get_class($a) . " fun\n";

    if ($callback !== NULL) {
        $callback();
    }
}

$callback = function () {
    rand(0, 1) == 0 ? print_r("I'm having fun\n") : print_r("I'm not having fun\n");
};

handleEntertainment(new Clown); // works
handleEntertainment(new Job, $callback); // runtime error



