<?php
$array = explode(" ", readline());
$count = 1;
$maxCount = 0;
$bestEnd = 0;

for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$i] == $array[$i + 1]) {
        $count++;
        if ($count > $maxCount) {
            $maxCount = $count;
            $bestEnd = $i + 1;

        }
    } else {
        $count = 1;
    }
}
if ($count == 1){
    echo $array[0];
    return;
}

for ($i = $bestEnd - $maxCount + 1; $i <= $bestEnd; $i++) {
    echo $array[$i] . " ";
}
