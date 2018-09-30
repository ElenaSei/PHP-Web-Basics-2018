<?php
require "Car.php";

$n = intval(readline());
$cars = [];
for ($i = 0; $i < $n; $i++){
    $input = explode(' ', readline());
    $model = $input[0];
    $fuelAmount = $input[1];
    $fuelCost = $input[2];

    $car = new Car($model, $fuelAmount, $fuelCost);
    $cars[] = $car;
}

while (true){
    $input = explode(' ', readline());

    if ($input[0] == 'End'){
        break;
    }

    $command = $input[0];
    $model = $input[1];
    $amountOfKm = $input[2];

    foreach ($cars as $car){
        if ($car->getModel() == $model){
            $car->drive($amountOfKm);
        }
    }
}

foreach ($cars as $car){
    echo $car;
}
