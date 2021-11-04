<?php
require_once 'Vehicle.php';

class Bus extends Vehicle
{
    public function changeWheel()
    {
        return "Change Wheel of a Bus";
    }
}