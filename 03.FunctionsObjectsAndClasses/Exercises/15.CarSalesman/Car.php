<?php
class Car
{
    private $model;
    private $engine;
    private $weight;
    private $color;

    /**
     * Car constructor.
     * @param $model
     * @param $engine
     * @param $weight
     * @param $color
     */
    public function __construct($model, $engine, $weight, $color)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
        $this->color = $color;
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
     * @return null
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return null
     */
    public function getColor()
    {
        return $this->color;
    }

    public function __toString()
    {
        $result = $this->getModel() . ':' . PHP_EOL
        . $this->getEngine()->getModel() . ':' . PHP_EOL
        . 'Power: ' . $this->getEngine()->getPower() . PHP_EOL
        . 'Displacement: ' . $this->getEngine()->getDisplacement() . PHP_EOL
        . 'Efficiency: ' . $this->getEngine()->getEfficiency() . PHP_EOL
        . 'Weight: ' . $this->getWeight() . PHP_EOL
        . 'Color: ' . $this->getColor() . PHP_EOL;

        return $result;
    }

}