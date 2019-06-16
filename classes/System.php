<?php


class System extends Car
{

    public $carSystem;

    public function __construct($cpu, $transmission, $engine)
    {

        $this->cpu = $cpu;
        $this->transmission = $transmission;
        $this->engine= $engine;
    }


    public function getCarSystem()
    {
        return $this->carSystem;
    }

}