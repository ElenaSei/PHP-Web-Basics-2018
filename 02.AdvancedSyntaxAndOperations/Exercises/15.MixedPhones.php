<?php
$contacts = [];
while (($input = trim(fgets(STDIN))) != "Over"){
    $splitted = explode(' : ', $input);

    if (is_numeric($splitted[0])){
        $number = $splitted[0];
        $person = $splitted[1];
    } else {
        $number = $splitted[1];
        $person = $splitted[0];
    }

    if (!isset($contacts[$person])){
        $contacts[$person] = $number;
    }
}

ksort($contacts);
foreach ($contacts as $contact=>$phone){
    echo "$contact -> $phone\n";
}