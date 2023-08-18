<?php

// main.php
require_once 'Dog.php';
require_once 'Cat.php';
require_once 'Cow.php';

$animals = [
    new Dog(),
    new Cat(),
    new Cow()
];

foreach ($animals as $animal) {
    echo get_class($animal) . " says: " . $animal->makeSound() . PHP_EOL;
}

?>