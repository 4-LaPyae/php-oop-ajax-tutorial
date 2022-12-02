<?php

use app\Circle;
use app\gem\Shape;
use app\Square;

require_once './vendor/autoload.php';
echo "<h2 style = 'color:violet'>lapyae2022.gm@gmail.com</h2>";
class Index{

    public function __construct()
    {
        $circle = new Circle(2);
        echo "This circle is ".$circle->getArea()." and ";
        $this->getPrice($circle);
        echo "<hr>";    
        $square = new Square(20,20);
        echo "This square is ".$square->getArea()." and ";
        $this->getPrice($square);
    }
    public function getPrice(Shape $shape){
        echo "Your total price is ".($shape->getArea() *3000)."$";
    }
}
new Index;