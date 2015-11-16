<?php
class Vehicle {
	private $type;
	private $cc;
	private $hp;
	public function __construct($type, $cc, $hp) {
		echo "<br/>Hi from Vehicle constructor";
		$this->type = $type;
		$this->cc = $cc;
		$this->hp = $hp;
	}
	public function getType() {
		return $this->type;
	}
	public function getCc() {
		return $this->cc;
	}
	public function getHp() {
		return $this->hp;
	}
}

//$v = new Vehicle ( 'Car', 1.3, 100 );
//echo "<br/>Type is " . $v->getType () . ", CC : " . $v->getCc () . ", HP : " . $v->getHp ();

