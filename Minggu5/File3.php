<?
class Rectangle implements Shape {
	private $width;
	private $height;
	
	public function __construct($width, $height)
	{
		$this -> $width = width ;
		$this -> $height = height ;
	}
	
	//calcArea calculates the area of rengtangles
	public function calcArea()
	{
		return $this -> width * $this -> height;
	}
}

$circ = new Circle(3);
$rect = new Rengtangle(3,4);

echo $circ -> calcArea();
echo $rest -> calsArea();
?>