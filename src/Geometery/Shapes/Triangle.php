<?php

namespace App\Geometery\Shapes;

use App\Geometery\Interfaces\ShapeInterface;


class Triangle implements ShapeInterface
{
    public $first_line;
    public $second_line;
    public $third_line;

    public function __construct($first_line , $second_line ,  $third_line)
    {
        $this->first_line = $first_line;
        $this->second_line = $second_line;
        $this->third_line = $third_line;
    }

    public function area()
    {
        $base = $this->circumference() / 2;
        return sqrt($base * ($base - $this->first_line) * ($base - $this->second_line) * ($base - $this->third_line));

    }


    public function circumference()
    {
        return ($this->first_line + $this->second_line + $this->third_line);
    }

}
