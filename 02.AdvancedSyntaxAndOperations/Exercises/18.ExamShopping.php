<?php
    $shop = [];
    while (($input = readline()) != "shopping time"){
        $exploded = explode(' ', $input);
        $command = $exploded[0];
        $product = $exploded[1];
        $quantity = intval($exploded[2]);

        if (!isset($shop[$product])){
                $shop[$product] = 0;
        }
        $shop[$product] += $quantity;
    }

    while (($input = readline()) != "exam time"){
        $exploded = explode(' ', $input);
        $command = $exploded[0];
        $product = $exploded[1];
        $quantity = intval($exploded[2]);

        if (!isset($shop[$product])){
            echo "$product doesn't exist\n";
        } elseif ($shop[$product] <= 0){
            echo "$product out of stock\n";
        } else{
            $shop[$product] -= $quantity;
        }
    }

    foreach ($shop as $product=>$quantity){
        if ($quantity > 0){
            echo "$product -> $quantity\n";
        }
    }