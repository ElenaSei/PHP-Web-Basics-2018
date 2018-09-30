<?php
$input = readline();
$digits = "";
$letter = "";
$other = "";

for ($i = 0; $i < strlen($input); $i++){
    if (ord($input[$i]) >= 65 && ord($input[$i]) <= 90
    || ord($input[$i]) >= 97 && ord($input[$i]) <= 122){
        $letter .= $input[$i];
    }elseif (ord($input[$i]) >= 48 && ord($input[$i]) <= 57){
        $digits .= $input[$i];
    }else{
        $other .= $input[$i];
    }
}

echo "$digits\n";
echo "$letter\n";
echo "$other\n";