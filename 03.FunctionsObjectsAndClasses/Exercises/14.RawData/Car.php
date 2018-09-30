<?php
class Car
{
    private $model;
    private $engine;
    private $cargo;
    private $tires;

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     * @param $cargo
     * @param $tires
     */
    public function __construct($model, $engine, $cargo, $tires)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        $this->tires = $tires;
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
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * @return mixed
     */
    public function getTires()
    {
        return $this->tires;
    }




}