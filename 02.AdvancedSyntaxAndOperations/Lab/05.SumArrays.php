<?php
    $arr1 = explode(' ', readline());
    $arr2 = explode(' ', readline());

    $arr3 = [];
    for ($i = 0; $i < max(count($arr1), count($arr2)); $i++){
        $arr3[$i] = $arr1[$i % count($arr1)] + $arr2[$i % count($arr2)];
    }

    echo implode(' ', $arr3);