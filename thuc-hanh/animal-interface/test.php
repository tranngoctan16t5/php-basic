<?php 
include_once "Animals/chicken.php";


$animals[0] = new Chicken();
foreach ($animals as $animal)  {
	echo $animal->makeSound() . "<br>";
	if($animal instanceof Chicken){
		echo $animal->howtoEat();
	}
}
 ?>