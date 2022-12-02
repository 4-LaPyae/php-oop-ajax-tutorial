<?php
namespace app;
use app\gem\Shape;

class Square implements Shape{
    private $w,$h;
    public function __construct($w,$h)
    {
        $this->w = $w;
        $this->h = $h;
    }

public function getArea()
{
    return $this->w * $this->h;
}
}