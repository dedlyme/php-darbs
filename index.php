<?php
include  "car.php";
include  "tire.php";
$car1 = new Car("audi",302123);
$car2 = new Car ("subaru",80085);
$tire1 = new Tire ("38","offroad","new");
echo  "riepas izmers ir ".$tire1->size.", riepas tips ir ".$tire1->type.", riepas kvalitate ir ". "<br>";


echo Car::$describe;
Car::makeNoise();