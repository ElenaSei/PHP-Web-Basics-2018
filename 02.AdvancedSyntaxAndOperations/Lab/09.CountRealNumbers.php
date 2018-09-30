<?php
$input = explode(' ', readline());

$nums = [];
for ($i = 0; $i < count($input); $i++){
    if (!isset($nums[$input[$i]])){
        $nums[$input[$i]] = 0;
    }

    $nums[$input[$i]] += 1;
}

ksort($nums);

foreach ($nums as $key=>$value){
    echo "$key -> $value\n";
}