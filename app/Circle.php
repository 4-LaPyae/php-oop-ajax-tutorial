<?php
namespace app;

use app\gem\Shape;

class Circle implements Shape{
private $r ;
public function __construct($r)
{
 $this->r = $r;   
}
 public function getArea()
 {
   return $this->r * $this->r *pi();
 }
}