<?php
$input = explode('|', readline());
$prohibited_symbols = array('@', '%', '&', '$', '*');

$teamPlayerInfo = [];
while(true){
    if ($input[0] == "Result"){
        break;
    }

    if ($input[0] == strtoupper($input[0])){
        $team = $input[0];
        $player = $input[1];
    }else{
        $team = $input[1];
        $player = $input[0];
    }

    $team = str_replace($prohibited_symbols, '', $team);
    $player = str_replace($prohibited_symbols, '', $player);
    $points = intval($input[2]);

    $teamPlayerInfo[$team][$player] = $points;

    $input = explode('|', readline());
}

$teamsPoints = [];

foreach ($teamPlayerInfo as $team=>$playerInfo){

    foreach ($teamPlayerInfo[$team] as $player=>$points){
        $teamsPoints[$team] += $points;
    }
}

arsort($teamsPoints);

foreach ($teamsPoints as $team=>$points){
    echo "$team => $points\n";
    arsort($teamPlayerInfo[$team]);
    foreach ($teamPlayerInfo[$team] as $player=>$value){
        echo "Most points scored by " . $player  ."\n";
        break;
    }
}
