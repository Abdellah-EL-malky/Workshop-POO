<?php

// step 1: call the class from cars.php
require_once 'cars.php';


// instanciation (is the process for creating objects)
//  to create objets for the class cars.php we use instanciation


// here we're going to create an example car1 is an object 
$car1 = new cars(color:"bugatti", brand:"red");


$car2 = new cars(brand:"Ferrari", color:"red");

// to diplay the value of car1 we use a funtion called var_dump() here we go

var_dump($car1, $car2);

// var_dump($car2);

echo 'it works';


?>

