<?php
$input = explode(', ', readline());
$rowSize = $input[0];
$colSize = $input[1];

for ($row = 0; $row < $rowSize; $row++){
    $matrix[$row] = array_map('intval', explode(', ', readline()));
}

$bestIndex = 0;
$bestSum = 0;
for ($row = 0; $row < count($matrix); $row++){
    for ($col = 0; $col < count($matrix[$row]) - 1; $col++){
        if ($matrix[$row][$col] + $matrix[$row][$col + 1] > $bestSum){
            $bestSum = $matrix[$row][$col] + $matrix[$row][$col + 1];
            $bestIndex = $col;
        }
    }
}