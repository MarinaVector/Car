<?php


class Wheels extends Car
{

    public $carWheels;

    public function __construct($rubber, $rims)
    {
        $this->rubber = $rubber;
        $this->rims = $rims;

    }



    public function getCarWheels()
    {
        return $this->carWheels;
    }

}