<?php

class Car {
  public $brand;
  private $milage;

public function __construct($b, $m) {
    $this->brand = $b;
    $this->milage = $m;
}
public function __destruct() {
    echo $this->brand . " car is dead at this milage: " . $this->milage . "<br>";
}}