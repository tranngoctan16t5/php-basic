<?php 

/**
 * 
 */
class Shape
{
	public $name;

	
	public cfunction __construct($name)
	{
		$this->name = $name;
	}
	public function show(){
		return " I am a shape. My name is $this->name";
	}
}
 ?>