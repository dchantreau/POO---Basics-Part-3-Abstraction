<?php

abstract class Vehicle {
   protected string $color;
   protected int $nbSeats;

 function  __construct(string $color, int $nbSeats)
 {
   $this->color = $color;
   $this->nbSeats = $nbSeats;

 }
 public function getColor(): string
 {
   return $this->color;
 }

public function getnbSeats():int
 {
   return $this->nbSeats;
 }

abstract public function changeWheel();
 }
