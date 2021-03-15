<?php
//The parent class
class Car {
	//private property inside the class
	private $model;

	//public setter method
	public function setModel($model)
	{
		$this -> model = $model;
	}

	public function hello()
	{
		return "beep! I am a <i>" .$this -> model ."</i><br>";
	}
}

//The child class inherits the code from the parent class
class SportsCar extends Car {
	//No code in the child class
}

//Create an instance from the chlid class
$SportsCarl = new SportsCar();

// Set the value of the class' property.
//For this aim, we use a method that we created in the parent
$SportsCarl -> setModel('Mercedes Benz');

//Use another method that child class inherited from the parent class
echo $SportsCarl -> hello ();
?>