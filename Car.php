<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    public function changeWheel(){
        return "Change Wheell of a Car";
    }
}