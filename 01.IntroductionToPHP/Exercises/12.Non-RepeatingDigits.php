<?php
$input = readline();
$bool = false;
$output = "";
for ($i = 1; $i <= 9; $i++){
    for ($k = 0; $k <= 9; $k++){
        for ($j = 0; $j <= 9; $j++){
            $num = $i . $k . $j;
            if ($i != $k && $i != $j && $k != $j &&
            $num <= $input){
                $output .= $num . ", ";
                $bool = true;
            }
        }
    }
}
if (!$bool){
    echo "no";
}else{
    echo substr($output, 0, strlen($output) - 2);
}
