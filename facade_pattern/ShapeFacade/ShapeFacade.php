<?php
namespace facade_pattern\ShapeFacade;
use facade_pattern\draw\Circle\Circle;
use facade_pattern\draw\Square\Square;
use facade_pattern\draw\Rectangle\Rectangle;

class ShapeFacade{
    private $circle,$square,$rectangle;
    public function __construct()
    {
        $this->circle = new Circle;
        $this->square = new Square;
        $this->rectangle = new Rectangle;
    }
    public function drawCircle(){
        $this->circle->draw();
    }
    public function drawSquare(){
        $this->square->draw();
    }
    public function drawRectangle(){
        $this->rectangle->draw();
    }
}
new ShapeFacade;