<?php
$input = readline();

for ($i = 0; $i < $input; $i++){
    $input2 = explode(' ', readline());

    for ($k = 0; $k < count($input2); $k++){
        $matrix[$i][$k] = $input2[$k];
    }
}

$primaryDiagonal = 0;
$counter = 0;

while($counter < count($matrix)){
    $primaryDiagonal += $matrix[$counter][$counter];
    $counter++;
}

$secondaryDiagonal = 0;
$count1 = count($matrix) - 1;
$count2 = 0;
while($count1 >= 0){
    $secondaryDiagonal += $matrix[$count2][$count1];
    $count1--;
    $count2++;
}

$diff = abs($primaryDiagonal - $secondaryDiagonal);

echo $diff;
