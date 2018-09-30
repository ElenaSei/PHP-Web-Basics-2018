<?php
$input = explode(', ', readline());
$rowSize = $input[0];
$colSize = $input[1];

for ($row = 0; $row < $rowSize; $row++){
    $matrix[$row] = array_map('intval', explode(', ', readline()));
}

$sum = 0;

foreach ($matrix as $row=>$colElements){
    foreach ($matrix[$row] as $k=>$v){
        $sum += $v;
    }
}
echo count($matrix) . PHP_EOL;
echo count($matrix[0]) . PHP_EOL;
echo $sum . PHP_EOL;