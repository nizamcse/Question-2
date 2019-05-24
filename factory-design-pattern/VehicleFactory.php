<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 24-May-19
 * Time: 8:41 PM
 */

class VehicleFactory
{
    public static function getVehicle($class){
        if($class instanceof Car){
            return new Car;
        }else if($class instanceof Plane){
            return new Plane;
        }else{
            return null;
        }
    }
}