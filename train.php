<?php
include_once "Vehicle.php";
class Train extends Vehicle {
  function __construct( 
      public $brand , 
      public $trackgouge, 
      private $mileage
      ) {}


  
  
  public function __destruct() 
  {
    echo "<br>"."boom!";
  }

  static function makeNoise(){
      echo "choo choo";
  }
  
}