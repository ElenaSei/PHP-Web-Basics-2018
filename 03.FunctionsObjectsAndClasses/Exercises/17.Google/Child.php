<?php
class Child
{
    private $childName;
    private $childBirthday;

    /**
     * Child constructor.
     * @param $childName
     * @param $childBirthday
     */
    public function __construct($childName, $childBirthday)
    {
        $this->setChildName($childName);
        $this->setChildBirthday($childBirthday);
    }

    /**
     * @return mixed
     */
    public function getChildName()
    {
        return $this->childName;
    }

    /**
     * @param mixed $childName
     */
    public function setChildName($childName): void
    {
        $this->childName = $childName;
    }

    /**
     * @return mixed
     */
    public function getChildBirthday()
    {
        return $this->childBirthday;
    }

    /**
     * @param mixed $childBirthday
     */
    public function setChildBirthday($childBirthday): void
    {
        $this->childBirthday = $childBirthday;
    }



}