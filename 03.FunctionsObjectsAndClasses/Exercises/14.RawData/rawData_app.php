<?php

require "Car.php";
require "Engine.php";
require "Cargo.php";
require "Tire.php";

$n = readline();
$cars = [];
for ($i = 0; $i < $n; $i++){
    $input = explode(' ', readline());
    $carModel = $input[0];
    $engineSpeed = $input[1];
    $enginePower = $input[2];
    $cargoWeight = $input[3];
    $cargoType = $input[4];
    $tire1Pressure = $input[5];
    $tire1Age = $input[6];
    $tire2Pressure = $input[7];
    $tire2Age = $input[8];
    $tire3Pressure = $input[9];
    $tire3Age = $input[10];
    $tire4Pressure = $input[11];
    $tire4Age = $input[12];
    $tires = [];

    $engine = new Engine($engineSpeed, $enginePower);
    $cargo = new Cargo($cargoWeight, $cargoType);
    $tire1 = new Tire($tire1Pressure, $tire1Age);
    $tire2 = new Tire($tire2Pressure, $tire2Age);
    $tire3 = new Tire($tire3Pressure, $tire3Age);
    $tire4 = new Tire($tire4Pressure, $tire4Age);
    $tires[] = $tire1;
    $tires[] = $tire2;
    $tires[] = $tire3;
    $tires[] = $tire4;

    $car = new Car($carModel, $engine, $cargo, $tires);
    $cars[] = $car;
}

$command = readline();

if ($command == 'fragile'){
    foreach ($cars as $car){
        if ($car->getCargo()->getType() == $command){

            foreach ($car->getTires() as $tire){
                if ($tire->getPressure() < 1){
                    echo $car->getModel() . PHP_EOL;
                    break;
                }
            }
        }
    }
}else{
    foreach ($cars as $car){
        if ($car->getCargo()->getType() == $command){
                if ($car->getEngine()->getPower() > 250){
                    echo $car->getModel() . PHP_EOL;
                }
        }
    }
}