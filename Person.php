<?php

class Person {
    public int $age;
    protected const PROTECTED_CONST = false;
    public const DEFAULT_USERNAME = "<unknown>";
    private string $INTERNAL_KEY = "ABC1234";

    public function __construct() {
        $this->age = 0;
    }

    public function incrementAge(): void
    {
        $this->age += 1;
        $this->ageChanged();
    }

    protected function decrementAge(): void
    {
        $this->age -= 1;
        $this->ageChanged();
    }

    private function ageChanged(): void
    {
        echo "Age changed to {$this->age}";
    }
}

class SupernaturalPerson extends Person {
    public function incrementAge(): void
    {
        // ages in reverse
        $this->decrementAge();
    }
}

$person = new Person;
$person->incrementAge();
//$person->decrementAge();  not allowed because it's protected and I
// can't call it from outside the class where it's defined or from a
// child class
//$person->ageChanged(); // also not allowed because it's private

$person = new SupernaturalPerson;
$person->incrementAge(); // calls decrementAge under the hood