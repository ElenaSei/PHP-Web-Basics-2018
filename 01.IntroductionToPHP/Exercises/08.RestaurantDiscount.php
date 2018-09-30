<?php
$group = intval(readline());
$package = readline();

$price = 0;
$hall = "";
if ($group <= 50){
    $price = 2500;
    $hall = "Small Hall";
}elseif ($group <= 100){
    $price = 5000;
    $hall = "Terrace";
}else if ($group <= 120){
    $price = 7500;
    $hall = "Great Hall";
}else{
    echo "We do not have an appropriate hall.";
    return;
}

if ($package == "Normal"){
    $price += 500;
    $price -= $price * 0.05;
}elseif ($package == "Gold"){
    $price += 750;
    $price -= $price * 0.1;
}else{
    $price += 1000;
    $price -= $price * 0.15;
}

$pricePerPerson = $price / $group;
$pricePerPerson = number_format($pricePerPerson, 2);

echo "We can offer you the $hall\n";
echo "The price per person is $pricePerPerson$\n";