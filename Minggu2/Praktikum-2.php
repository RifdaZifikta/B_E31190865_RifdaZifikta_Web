<?php
class Car {

    //properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    //method = hello
    public function hello()
    {
        return "Beep i am <i>" . $this -> comp . "</i>, and i am <i>" . $this -> color;
    }
}

//create object di class.
$bmw = new Car();
$mercedes = new Car();


//Set values dari class properties
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedes Benz";

//call hello method untuk $sbm object.
echo $bmw -> hello();
?>