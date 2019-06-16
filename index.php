<?php

error_reporting(-1);
require_once 'classes/Car.php';
require_once 'classes/Salon.php';
require_once 'classes/System.php';
require_once 'classes/Wheels.php';



$car = new Car('Внедорожник', 'Вариатор', 17 );

$salon = new Salon('Пластик', 'Голубой', 'Кожа' );

$system = new System('5 цилиндров', '2WD', '3S-FE' );

$wheels = new Wheels('Зима-лета', 'Цельнолитые' );

echo $car->getCar();
echo $salon->getSalon();
echo $system->getSystem();
echo $wheels ->getWheels();

