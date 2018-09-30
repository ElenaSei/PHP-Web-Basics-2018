<?php
$arr = explode(' ', readline());
$notFound = true;
for ($a = 0; $a < count($arr); $a++){
    for ($b = 0; $b < count($arr); $b++){
        for ($c = 0; $c < count($arr); $c++){
            if ($a >= 0 && $a < $b && $b < count($arr) &&$arr[$a] + $arr[$b] == $arr[$c]){
                echo "$arr[$a] + $arr[$b] == $arr[$c]\n";
                            $notFound = false;
                            break;
            }
        }
    }
}
if ($notFound)
{
    echo "No";
}