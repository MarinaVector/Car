<?php

class Car
{

    public $salon;
    public $system;
    public $wheels;


    public function __construct($salon, $system, $wheels=4)
    {
        $this->salon = $salon;
        $this->system = $system;
        $this->wheels = $wheels;
    }

    public function getCar()
    {
        return "<hr><h3>Наш автомобиль:</h3><br>
                Салон: {$this->salon}<br>
               Двигательная система: {$this->system}<br>
                Колёса: {$this->wheels}<br>";
    }

    public function getSalon()
    {
        return  "<hr><b>Салон:</b><br>
                Кузов: {$this->body}<br>
               Панель: {$this->hood}<br>
                Обивка: {$this->upholstery}<br>";
    }

    public function getSystem()
    {
        return "<hr><b>Двигательная система:</b><br>
                Двигатель: {$this->engine}<br>
              Коробка: {$this->transmission}<br>
                Инжектор: {$this->cpu}<br>";

    }

    public function getWheels()
    {
        return "<hr><b>Колёса:</b><br>
                Резина: {$this->rubber}<br>
                     Диски: {$this->rims}<br>";
    }

}