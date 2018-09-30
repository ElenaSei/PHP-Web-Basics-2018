<?php
$lenght = readline();
$arr = [];

for ($i = 0; $i < $lenght; $i++)
{
    $arr[$i] = intval(readline());
}
for ($i = count($arr) - 1; $i >= 0; $i--)
{
    echo $arr[$i] . " ";
}