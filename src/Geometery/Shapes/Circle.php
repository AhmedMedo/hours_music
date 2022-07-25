<?php

namespace App\Geometery\Shapes;

use App\Geometery\Interfaces\ShapeInterface;


class Circle implements ShapeInterface
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * pow($this->radius , 2);
    }


    public function circumference()
    {
        return 2 * pi() * $this->radius;
    }

}
