<?php
//The parent class
class Car {
	//The $model property is no protected, so it can be accessed
	//from within the class and its chlid classes
	protected $model;

	//Public setter method
	public function setModel($model)
	{
		$this -> model = $model;
	}
}

// The chlid class
class SportsCar extends Car {
	//Has no problem to get a protected property that belongs to the parent
	public function hello()
	{
		return "beep! I am a <i>".$this -> model."</i><br/>";
	}
}

//Create an instance from the chlid class
$sportsCarl = new SportsCar();

//Set the Model name
$sportsCarl ->setModel('Mercedes Benz');

//Get the class model name
echo $sportsCarl -> hello();
?>