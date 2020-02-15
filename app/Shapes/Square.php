<?php

namespace App\Shapes;

class Square implements ShapeInterface
{
    private $sidelength;

    public function __construct($sidelength)
    {
        $this->sidelength = $sidelength;
       
    }
    public function area()
    {
        return $this->sidelength * $this->sidelength;
        
    }
}