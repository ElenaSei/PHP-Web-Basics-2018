<?php
    $input = strtolower(readline());

    $arr = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];

    for ($i = 0; $i < strlen($input); $i++){
        echo "$input[$i] -> " . array_search($input[$i], $arr) . PHP_EOL;
    }