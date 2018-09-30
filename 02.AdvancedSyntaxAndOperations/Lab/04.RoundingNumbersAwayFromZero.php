<?php
$arr = explode(' ', readline());

foreach ($arr as $value){
    echo $value . " => " . round($value , 0 ,PHP_ROUND_HALF_UP) . "\n";
}