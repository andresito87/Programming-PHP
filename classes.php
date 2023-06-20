<?php
class Person
{
    public $name = '';

    function name ($newname = NULL)
    {
        if (!is_null($newname)) {
            $this->name = $newname;
        }

        return $this->name;
    }
}

$ed = new Person; ## create an instance of the class
$ed->name('Edison'); ## call the method name()
echo "Hello, {$ed->name} <br/>"; ## print the name

$tc = new Person; // create another instance of the class
$tc->name('Crapper'); // call the method name()
echo "Hello, {$tc->name} <br/>"; // print the name