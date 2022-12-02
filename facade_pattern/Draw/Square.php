<?php
namespace facade_pattern\Draw\Square;
use facade_pattern\Shape\Shape;
class Square implements Shape{
    public function draw()
    {
        echo "drawing square!";
    }
}