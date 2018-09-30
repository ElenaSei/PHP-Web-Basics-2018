<?php
$input = explode(' ', strtolower(readline()));

$arr = [];
for($i = 0; $i < count($input); $i++){
    if (!isset($arr[$input[$i]])){
        $arr[$input[$i]] = 0;
    }
    $arr[$input[$i]] += 1;
}

$resultArr = [];
foreach ($arr as $key=>$value){
    if ($value % 2 != 0){
        $resultArr[] = $key;
    }
}

echo implode(', ', $resultArr);