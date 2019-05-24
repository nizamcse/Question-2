<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 24-May-19
 * Time: 3:23 PM
 */

class Car implements Vehicle
{

    public function set_num_of_wheels()
    {
        return 4;
    }

    public function set_num_of_passengers()
    {
        return 3;
    }

    public function has_gas()
    {
        return true;
    }
}