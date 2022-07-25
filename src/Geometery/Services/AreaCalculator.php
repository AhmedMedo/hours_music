<?php
namespace App\Geometery\Services;

use Exception;
use App\Geometery\Interfaces\ShapeInterface;

class AreaCalculator
{
    protected $shapes;

    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            if(!is_a($shape , ShapeInterface::class))
            {
                throw new Exception("Worng Shape type");
            }
            $area[] = $shape->area();
        }

        return array_sum($area);
    }

}