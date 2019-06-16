<?php


class Salon extends Car
{

    public $carSalon;

    public function __construct($body, $upholstery, $hood)
    {

        $this->body = $body;
        $this->upholstery = $upholstery;
        $this->hood = $hood;
    }



    public function getCarSalon()
    {
        return $this->carSalon;
    }

}