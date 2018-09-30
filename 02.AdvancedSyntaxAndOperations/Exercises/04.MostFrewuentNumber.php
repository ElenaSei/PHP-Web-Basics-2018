<?php
$input = explode(" ", readline());
$result = [];
for ($i = 0; $i < count($input); $i++) {
    if (!isset($result[$input[$i]])) {
        $result[$input[$i]] = 1;
    } else {
        $result[$input[$i]]++;
    }

}

$max = max($result);
foreach ($result as $key => $value) {
    if ($value == $max) {
        echo $key;
        break;
    }
}
