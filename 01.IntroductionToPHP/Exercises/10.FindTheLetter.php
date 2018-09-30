<?php
$input = readline();
$array = explode(' ', readline());

$letter = $array[0];
$occurrence = intval($array[1]);

$count = 0;
for ($i = 0; $i < strlen($input); $i++){
    if ($input[$i] == $letter){
        $count++;
    }
    if ($count == $occurrence){
        echo $i;
        return;
    }
}

echo "Find the letter yourself!";
