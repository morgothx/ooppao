<?php

interface Shape
{
    public function draw();
}

class Circle implements Shape
{
    public function draw()
    {
        echo "Drawing Circle\n";
    }
}

class Rectangle implements Shape
{
    public function draw()
    {
        echo "Drawing Rectangle\n";
    }
}

class ShapeFactory
{
    public static function createShape($type)
    {
        switch ($type) {
            case 'Circle':
                return new Circle();
                case 'Rectangle':
                    return new Rectangle();
            default:
                throw new Exception("Invalid shape type");
        }
    }
}

$circle = ShapeFactory::createShape('Circle');
$rectangule = ShapeFactory::createShape('Rectangle');

$circle->draw();
$rectangule->draw();