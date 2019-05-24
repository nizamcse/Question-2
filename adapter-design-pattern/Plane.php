<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 24-May-19
 * Time: 8:37 PM
 */

class Plane implements Vehicle
{

    public function set_num_of_wheels()
    {
        return 3;
    }

    public function set_num_of_passengers()
    {
        return 120;
    }

    public function has_gas()
    {
        return false;
    }
}