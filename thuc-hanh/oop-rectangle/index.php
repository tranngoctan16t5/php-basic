<?php 

 include "rectangle.php";

 $width =10;
 $height = 20;

 $rectangle = new Rectangle($width,$height);

 echo $rectangle->width;
 echo $rectangle->height;

 $rectangle->width = 30;
 $rectangle->height =50;

 echo $rectangle->width;
 echo $rectangle->height;
 echo "<br>";
 echo $rectangle->display();
 echo "<br>";
 echo $rectangle->getArea();
 echo "<br>";
 echo $rectangle->getPerimeter();


 ?>