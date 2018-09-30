<?php
class Person{
    private $name;
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $age
     */
    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function __toString()
    {
        return $this->name . ' ' . $this->age;
    }


}

class Family{
    private $people = [];

    /**
     * Family constructor.
     * @param $people
     */
    public function __construct()
    {

    }

    public function addMember(Person $person){
        $this->people[] = $person;
    }

    public function getOldestMember(){
        usort($this->people, function ($a, $b){
            return $a->getAge() < $b->getAge();
        });

        return $this->people[0];

    }

}

$n = readline();
$family = new Family();
for ($i = 0; $i < $n; $i++){
    $input = explode(' ', readline());
    $name = $input[0];
    $age = $input[1];
    $person = new Person($name, $age);

    $family->addMember($person);

}

$oldestPerson = $family->getOldestMember();

echo $oldestPerson;