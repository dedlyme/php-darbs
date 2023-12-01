<?


abstract class Vehicle{
    public $brand;
    private $milage;
    static $descrioption
  
    function increaseMileage($amount){
        $this->mileage = $this->mileage +=$amount;
    }
    public function __destruct() {
        echo $this->brand . " car is dead at this milage: " . $this->milage . "<br>";
    }
    abstract static function makeNoise();
}