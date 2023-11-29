<?php

class Car {
  public $brand;
  private $milage;
  static $describe = "i have 4 wheels, or 5 or 4";
public function __construct($b, $m) {
    $this->brand = $b;
    $this->milage = $m;
}
public function __destruct() {
    echo $this->brand . " car is dead at this milage: " . $this->milage . "<br>";
}
static function makeNoise(){
  echo "bepp vepep;";
}}