<?php
class Car
{
    private $carModel;
    private $carSpeed;

    /**
     * Car constructor.
     * @param $carModel
     * @param $carSpeed
     */
    public function __construct($carModel, $carSpeed)
    {
        $this->setCarModel($carModel);
        $this->setCarSpeed($carSpeed);
    }

    /**
     * @return mixed
     */
    public function getCarModel()
    {
        return $this->carModel;
    }

    /**
     * @param mixed $carModel
     */
    public function setCarModel($carModel): void
    {
        $this->carModel = $carModel;
    }

    /**
     * @return mixed
     */
    public function getCarSpeed()
    {
        return $this->carSpeed;
    }

    /**
     * @param mixed $carSpeed
     */
    public function setCarSpeed($carSpeed): void
    {
        $this->carSpeed = $carSpeed;
    }



}