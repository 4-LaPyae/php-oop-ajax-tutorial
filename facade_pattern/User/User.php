<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../../vendor/autoload.php";
use facade_pattern\ShapeFacade\ShapeFacade;
class User{
    public function __construct()
    {
        $obj = new ShapeFacade;
        $obj->drawCircle();
        echo "<hr>";
        $obj->drawRectangle();
        echo "<hr>";
        $obj->drawSquare();
    }
}

new User;

