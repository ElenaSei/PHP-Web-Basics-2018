<?php
    $counter = readline();

    $num = 1;
    $sum = $num;
    while(true){
        $counter--;
        echo $num . "\n";

        if ($counter == 0){
            break;
        }
        $num += 2;
        $sum += $num;
    }

    echo "Sum: $sum";