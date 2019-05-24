<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 24-May-19
 * Time: 8:37 PM
 */

class Plane implements Vehicle
{

    public $num_of_wheel;
    public $num_of_passe;
    public $run_by_gas;

    public function set_num_of_wheels()
    {
        $this->num_of_wheel = 3;
    }

    public function set_num_of_passengers()
    {
        $this->num_of_passe = 180;
    }

    public function has_gas()
    {
        $this->run_by_gas = false;
    }
}