<?php
//The parent class has method that returns "beep"

class Car {
	final public function hello()
	{
		return "beep";
	}
}

//The child class has hello methods that to override the helo method in the parent
class SportsCar extends Car {
	public function hello()
	{
		return "hallo";
	}
}

//Create a new object
$SportsCarl = new SportsCar();

//Get the result of the hello word
echo $SportsCarl -> hello();

