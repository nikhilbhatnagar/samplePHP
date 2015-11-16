<?php include("Vehicle.php"); ?>
<?php

class Car extends Vehicle {
	private $noOfDoors;
	private $color;
	private $brand;
	public function __construct($cc, $hp, $noOfDoors, $color, $brand) {
		echo "<br/>Hi from car constructor";
		parent::__construct ( 'Car', $cc, $hp );
		$this->noOfDoors = $noOfDoors;
		$this->color = $color;
		$this->brand = $brand;
	}
	public function getColor() {
		return $this->color;
	}
	public function getNoOfDoors() {
		return $this->noOfDoors;
	}
	public function getBrand() {
		return $this->brand;
	}
}

$v = new Car ( 1.3, 100, 4, 'Golden', 'BMW' );
echo "<br/>Type is " . $v->getType () . ", CC : " . $v->getCc () . ", HP : " . $v->getHp () . ", Color : " . $v->getColor () . ", Brand : " . $v->getBrand ();