<?php
require "Car.php";
require "Engine.php";

$n = intval(readline());

$engines = [];
for ($i = 0; $i < $n; $i++){
    $input = explode(' ', readline());
    $engineModel = $input[0];
    $power = $input[1];

    if (count($input) < 3){
        $displacement = 'n/a';
        $efficiency = 'n/a';
    }elseif (count($input) == 3){
        if (is_numeric($input[2])){
            $displacement = $input[2];
            $efficiency = 'n/a';
        }else{
            $efficiency = $input[2];
            $displacement = 'n/a';
        }
    }else{
        $displacement = $input[2];
        $efficiency = $input[3];
    }

    $engine = new Engine($engineModel, $power, $displacement, $efficiency);
    $engines[$engineModel] = $engine;
}

$m = intval(readline());
$cars = [];
for ($i = 0; $i < $m; $i++){
    $input = explode(' ', readline());
    $carModel = $input[0];
    $engineName = $input[1];

    if (count($input) < 3){
        $weight = 'n/a';
        $color = 'n/a';
    }elseif (count($input) == 3){
        if (is_numeric($input[2])){
            $weight = $input[2];
            $color = 'n/a';
        }else{
            $color = $input[2];
            $weight = 'n/a';
        }
    }else{
        $weight = $input[2];
        $color = $input[3];
    }

    foreach ($engines as $name=>$engine){
        if ($engineName == $name){
            $car = new Car($carModel, $engine, $weight, $color);
        }
    }

    $cars[] = $car;
}

foreach ($cars as $car){
    echo $car;
}
