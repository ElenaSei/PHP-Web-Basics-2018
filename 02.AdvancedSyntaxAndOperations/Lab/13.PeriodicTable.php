<?php
$input = explode(', ', readline());

$uniqueElements = [];
for ($i = 0; $i < count($input); $i++){
    $element = $input[$i];

    if (!isset($uniqueElements[$element])){
        $uniqueElements[$element] = 0;
    }
    $uniqueElements[$element] += 1;
}

foreach ($uniqueElements as $key=>$value){
    if ($value == 1){
        echo $key . " ";
    }
}