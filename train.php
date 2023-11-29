<?php

class Train {
  function __construct( 
      public $brand , 
      public $trackgouge, 
      private $mileage
      ) {}


  
  
  public function __destruct() 
  {
    echo "<br>"."boom!";
  }
  function increaseMileage($amount){
      $this->mileage = $this->mileage +=$amount;
  }
  static function makeNoise(){
      echo "choo choo";
  }
}