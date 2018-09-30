<?php
$arr = explode(' ', readline());

$sum = 0;
for ($i = 0; $i < count($arr); $i++){
    $sum += intval(strrev($arr[$i]));
}

echo $sum;