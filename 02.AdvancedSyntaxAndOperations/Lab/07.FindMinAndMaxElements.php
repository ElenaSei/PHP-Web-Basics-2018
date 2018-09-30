<?php
$input = explode(', ', readline());
$rows = $input[0];
$cols = $input[1];

$min = PHP_INT_MAX;
$max = PHP_INT_MIN;
for ($i = 0; $i < $rows; $i++){
    $matrix[$i] = array_map('intval', explode(', ', readline()));
}

for ($i = 0; $i < count($matrix); $i++){
    for ($k = 0; $k < count($matrix[$i]); $k++){
        if ($matrix[$i][$k] < $min){
            $min = $matrix[$i][$k];
        }
        if ($matrix[$i][$k] > $max){
            $max = $matrix[$i][$k];
        }
    }
}

echo "Min: $min\n";
echo "Max: $max\n";

