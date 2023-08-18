<?php

require_once 'Shape.php';

class Circle extends Shape {

    //this is child class
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}


?>