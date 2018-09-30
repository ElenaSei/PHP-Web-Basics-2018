<?php
    $input = readline();

    for ($i = 1; $i <= $input; $i++){
        $num = $i;
        $sum = 0;

        while ($num > 0){
            $reminder = $num % 10;
            $sum += $reminder;
            $num /= 10;
        }

        if ($sum == 5 || $sum == 7 || $sum == 11){
            echo "$i -> True\n";
        }else{
            echo "$i -> False\n";
        }
    }