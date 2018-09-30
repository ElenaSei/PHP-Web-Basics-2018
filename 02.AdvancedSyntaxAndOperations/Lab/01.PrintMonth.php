<?php
    $input = intval(readline());

    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    if ($input <= 1 || $input > 12){
        echo 'Invalid Month!';
    }else{
        echo $months[$input - 1];
    }