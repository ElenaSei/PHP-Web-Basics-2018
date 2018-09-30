<?php
class Car
{
    private $model;
    private $fuelAmount;
    private $fuelCost; // per km
    private $distanceTraveled = 0;

    public function __construct($model, $fuelAmount, $fuelCost)
    {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelCost = $fuelCost;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    public function drive($amountOfKm){
        if ($this->fuelAmount - $this->fuelCost * $amountOfKm >= 0){
            $this->fuelAmount -= $this->fuelCost * $amountOfKm;
            $this->fuelAmount = number_format($this->fuelAmount, 2, '.', '');
            $this->distanceTraveled += $amountOfKm;
        }else{
            echo 'Insufficient fuel for the drive' . PHP_EOL;
        }
    }

    public function __toString()
    {
        return $this->model . ' '
            . number_format($this->fuelAmount, 2, '.', '') . ' '
            .$this->distanceTraveled . PHP_EOL;
    }
}