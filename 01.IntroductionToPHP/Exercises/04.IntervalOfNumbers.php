<?php
$firstNum = intval(fgets(STDIN));
$secondNum = intval(fgets(STDIN));

for ($i = min($firstNum, $secondNum); $i <= max($firstNum, $secondNum); $i++){
    echo $i . "\n";
}