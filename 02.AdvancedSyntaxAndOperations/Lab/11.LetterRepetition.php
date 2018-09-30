<?php
$input = readline();

$result = [];
for ($i = 0; $i < strlen($input); $i++){
    if (!isset($result[$input[$i]])){
        $result[$input[$i]] = 0;
    }
    $result[$input[$i]] += 1;
}

foreach ($result as $key=>$value){
    echo "$key -> $value\n";
}