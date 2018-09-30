<?php
    $month = date('m', strtolower(readline()));

    $total_days = cal_days_in_month(CAL_GREGORIAN, $month, 2018);
    for ($i = 1; $i <= $total_days; $i++){
        if (date('N', strtotime(2018 . '-' . $month . '-' . $i)) == 7){
            echo $i . 'rd' . $month . ', ' . "2018\n";
        }
    }