<?php
$num1 = readline();
$num2 = readline();

for ($i = $num2; $i <= 10; $i++){
    echo "$num1 X $i = " . $num1 * $i . "\n";
}

if ($num2 > 10){
    echo "$num1 X $num2 = " . $num1 * $num2 . "\n";
}