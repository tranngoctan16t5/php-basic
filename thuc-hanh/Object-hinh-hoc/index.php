<?php 
include_once "Circle.php";
include_once "Cylinder.php";

$circle = new Circle('Circle 01',3);
echo 'Circle area:' . $circle->calculateArea() . "<br>";
echo 'Circle perimeter:' . $circle->calculatePerimeter() . "<br>";

 ?>