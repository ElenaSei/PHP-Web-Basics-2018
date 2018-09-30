<?php
    $input = explode(', ', readline());

    $towns = [];
    for ($i = 0; $i < count($input); $i+=2){

        $town = $input[$i];
        $income = intval($input[$i + 1]);
        if (!isset($towns[$town])){
            $towns[$town] = 0;
        }
        $towns[$town] += $income;
    }


    foreach ($towns as $key=>$value){
        echo "$key => $value\n";
    }