<?php

$matrix = [];

$input = explode(', ', readline());
$num = $input[0];
$pattern = $input[1];

$count = 1;
if ($pattern == 'A'){
    for ($i = 0; $i < $num; $i++){
        for ($k = 0; $k < $num; $k++){
            $matrix[$i][$k] = $count++;
        }
    }
}

for ($i = 0; $i < count($matrix); $i++){
    for ($k = 0; $k < count($matrix[$i]); $k++){
        echo $matrix[$i][$k] . " ";
    }
    echo PHP_EOL;
}

// NOT READY!