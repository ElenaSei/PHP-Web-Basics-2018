<?php
class Tire
{
    private $pressure;
    private $age;

    /**
     * Tire constructor.
     * @param $pressure
     * @param $age
     */
    public function __construct($pressure, $age)
    {
        $this->pressure = $pressure;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }


}