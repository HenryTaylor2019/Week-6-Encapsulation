<?php

namespace App\Shapes;

class Circle implements ShapeInterface
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
       
    }
    public function area() : int
    {
        return pi() * $this->radius * $this->radius;
        
    }
}