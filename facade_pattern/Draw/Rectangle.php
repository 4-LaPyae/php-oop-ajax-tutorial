<?php
namespace facade_pattern\Draw\Rectangle;
use facade_pattern\Shape\Shape;
class Rectangle implements Shape{
    public function draw()
    {
        echo "drawing rectangle";
    }
}