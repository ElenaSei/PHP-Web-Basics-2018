<?php
class Engine
{
    private $model;
    private $power;
    private $displacement;
    private $efficiency;

    /**
     * Engine constructor.
     * @param $model
     * @param $power
     * @param $displacement
     * @param $efficiency
     */
    public function __construct($model, $power, $displacement, $efficiency)
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficiency = $efficiency;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @return null
     */
    public function getDisplacement()
    {
        return $this->displacement;
    }

    /**
     * @return null
     */
    public function getEfficiency()
    {
        return $this->efficiency;
    }


}