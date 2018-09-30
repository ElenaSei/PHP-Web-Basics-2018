<?php
class Engine
{
    private $speed;
    private $power;

    /**
     * Engine constructor.
     * @param $speed
     * @param $power
     */
    public function __construct($speed, $power)
    {
        $this->speed = $speed;
        $this->power = $power;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }



}