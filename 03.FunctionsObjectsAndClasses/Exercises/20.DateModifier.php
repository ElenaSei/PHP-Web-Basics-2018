<?php
$input = explode(' ', readline());
$year = $input[0];
$month = $input[1];
$day = $input[2];

$date1 = new DateTime();
$date1->setDate($year, $month, $day);

$input = explode(' ', readline());
$year = $input[0];
$month = $input[1];
$day = $input[2];

$date2 = new DateTime();
$date2->setDate($year, $month, $day);

$diff = $date1->diff($date2);
echo $diff->format('%a');