<?php
$users = [];
while (($input = readline()) != "login"){
    $exploded = explode(' -> ', $input);
    $user = $exploded[0];
    $pass = $exploded[1];

    if (!isset($users[$user])){
        $users[$user] = "";
    }
    $users[$user] = $pass;
}

$unsuccessfulLogins = 0;
while (($input = readline()) != "end"){
    $exploded = explode(' -> ', $input);
    $user = $exploded[0];
    $pass = $exploded[1];

    if (isset($users[$user]) && $users[$user] == $pass){
        echo "$user: logged in successfully\n";
    } else{
        echo "$user: login failed\n";
        $unsuccessfulLogins++;
    }
}

echo "unsuccessful login attempts: $unsuccessfulLogins";