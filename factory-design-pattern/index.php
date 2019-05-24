<?php

//require_once "PayKal.php";
//require_once "Customer.php";
//require_once "PayKal2PayZillaAdapter.php";
//
//
//$payKal = new PayKal();
//$pay = new PayKal2PayZillaAdapter($payKal);
//$customer = new Customer($pay);
//$customer -> buy("lollipop", 2);

require_once "Vehicle.php";
require_once "Car.php";
require_once "Plane.php";
require_once "VehicleFactory.php";

$car = VehicleFactory::getVehicle(new Car);
$car->set_num_of_wheels();
echo "Number of wheels " .$car->num_of_wheel."</br>";

$car->set_num_of_passengers();
echo "Number of passengers " .$car->num_of_passe."</br>";
$car->has_gas();
echo "Has Gas " .$car->run_by_gas."</br>";


$plane = VehicleFactory::getVehicle(new Plane);
$plane->set_num_of_wheels();
echo "Number of wheels " .$plane->num_of_wheel."</br>";

$plane->set_num_of_passengers();
echo "Number of passengers " .$plane->num_of_passe."</br>";
$plane->has_gas();
echo "Has Gas " .$plane->run_by_gas."</br>";