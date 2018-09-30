<?php
$input = readline();

if (strlen($input) < 20){
    $input .= str_repeat("*", 20 - strlen($input));
} elseif (strlen($input) > 20){
    $input = substr($input, 0, 20);
}

echo $input;