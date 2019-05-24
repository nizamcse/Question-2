<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 24-May-19
 * Time: 8:41 PM
 */
require_once "Vehicle.php";

class VehicleFactory {
    private $source;

    public function __construct(Vehicle $source) {
        $this->source = $source;
    }
    public function getNumberOfPassengers() {
        echo "Number Of Passengers: ".$this->source->set_num_of_passengers()."</br>";
    }

    public function getNumberOfWheels() {
        echo "Number Of Wheels: ".$this->source->set_num_of_wheels()."</br>";
    }

    public function runWithGas() {
        echo "Run with gas: ".$this->source->has_gas() ."</br>";
    }
}