<?php

class Tire {
  

function __construct( public $size , public $type, private $quality) {

}
  

  
  public function __destruct() {
    echo "<br>"."boom!";
  }
}
