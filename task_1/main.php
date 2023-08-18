<?php

require_once 'Circle.php';
require_once 'Rectangle.php';

$circle = new Circle(9);
$circleArea = $circle->calculateArea();
echo "Circle Area: " . $circleArea . PHP_EOL;

$rectangle = new Rectangle(11, 13);
$rectangleArea = $rectangle->calculateArea();
echo "Rectangle Area: " . $rectangleArea . PHP_EOL;

?>