<?php
// The parent class has hello method that returns "beep".
class Car {
	public function hello()
	{
		return "beep";
	}
}

//The chlid class has hello method that returns "hallo"
class SportsCar extends Car {
	public function hello ()
	{
		return "hallo";
	}
}

//Create a new object
$sportsCar1 = new SportsCar();

//Get the result of the hello method
echo $sportsCar1 -> hello();

 ?>