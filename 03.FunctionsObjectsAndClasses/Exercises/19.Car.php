<?php

class Car
{
    private $speed;
    private $fuel;
    private $fuelEconomy;
    private $travelDistance=0;
    private $traveleime=0;

    public function __construct(int $speed,float $fuel,float $fuelEconomy)
    {
        $this->speed=$speed;
        $this->fuel=$fuel;
        $this->fuelEconomy=$fuelEconomy/100;
    }

    public function travel($distance)
    {

        $neededFuel=$distance*$this->fuelEconomy;

        if($neededFuel <= $this->fuel){
            $this->travelDistance+=$distance;
            $this->fuel-=$neededFuel;
            $this->traveleime+=$distance*(60/$this->speed);
        }
        else{
            $this->travelDistance+=$this->fuel/$this->fuelEconomy;
            $this->traveleime+=($this->fuel / $this->fuelEconomy)*(60/$this->speed);
            $this->fuel=0;
        }
    }
    public function refuel(float $liters)
    {
        $this->fuel+=$liters;
    }

    public function getFuel():float
    {
        return $this->fuel;
    }
    public function getTravelDistance():float
    {
        return $this->travelDistance;
    }
    public function getTraveleime()
    {
        $totalMinutes=$this->traveleime;
        $totalHours=floor($totalMinutes/60) ;
        $totalMinutes=floor($totalMinutes%60);
        return "{$totalHours} hours and {$totalMinutes} minutes";
    }
}

$carInfo=explode(" ",trim(fgets(STDIN)));
$car=new Car($carInfo[0],floatval($carInfo[1]) ,floatval($carInfo[2]));

while (true){
    $input=trim(fgets(STDIN));
    if($input==="END"){
        break;
    }
    $info=explode(" ",$input);
    switch ($info[0]){
        case "Travel":
            $car->travel(floatval($info[1]));
            break;
        case "Refuel":
            $car->refuel(floatval($info[1]));
            break;
        case "Distance":
            echo "Total Distance: ".number_format(round($car->getTravelDistance(),1),1)."\n";
            break;
        case "Time":
            echo "Total Time: {$car->getTraveleime()}\n";
            break;
        case "Fuel":
            echo "Fuel left: ".number_format(round($car->getFuel(),1),1)." liters\n";
            break;
    }

}