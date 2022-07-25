<?php
// src/Controller/BlogController.php
namespace App\Controller;

use App\Geometery\Shapes\Circle;
use App\Geometery\Shapes\Triangle;
use App\Geometery\Services\AreaCalculator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ShapeController extends AbstractController
{

    public function triangle($a , $b , $c) : JsonResponse
    {
        $triangle = new Triangle($a , $b ,  $c);
        return new JsonResponse([
            'type'          => 'triangle',
            "a"             => $a,
            "b"             => $b,
            "c"             => $c,
            "surface"       => $triangle->area(),
            "circumference" => $triangle->circumference(),          

        ]);  
    }



    public function circle($radius) : JsonResponse
    {
        $circle = new Circle($radius);
        return new JsonResponse([
            'type'  => 'circle',
            "radius" => $radius,
            "surface" => $circle->area(),
            "circumference" => $circle->circumference(),          

        ]);
    }

    public function sum_areas($radius , $a , $b , $c) : JsonResponse
    {
        $circle = new Circle($radius);

        $triangle = new Triangle($a , $b ,  $c);

        $areaCalculator = new AreaCalculator([$circle , $triangle]);
        return new JsonResponse([$areaCalculator->sum()]);
    }
}