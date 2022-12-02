<?php
namespace  facade_pattern\Draw\Circle;
use facade_pattern\Shape\Shape;
class Circle implements Shape{
public function draw()
{
    echo "drawing circle!";
}
}