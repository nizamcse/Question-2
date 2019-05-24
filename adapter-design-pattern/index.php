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
require_once "VehicleAdapter.php";


$car = new VehicleAdapter(new Car);
$car->getNumberOfPassengers();
$car->getNumberOfWheels();
$car->runWithGas();

// For Plane

$plane = new VehicleAdapter(new Plane);
$plane->getNumberOfPassengers();
$plane->getNumberOfWheels();
$plane->runWithGas();

