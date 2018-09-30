<?php
class Cargo
{
    private $weight;
    private $type;

    /**
     * Cargo constructor.
     * @param $weight
     * @param $type
     */
    public function __construct($weight, $type)
    {
        $this->weight = $weight;
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }


}