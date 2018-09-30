<?php
//require "Trainer.php";
//require "Pokemon.php";

class Trainer
{
    private $name;
    private $badges = 0;
    private $pokemons = [];

    public function __construct($name)
    {
        $this->setName($name);
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
     * @return int
     */
    public function getBadges(): int
    {
        return $this->badges;
    }

    /**
     * @param int $numOfBadges
     */
    public function setBadges(): void
    {
        $this->badges += 1;
    }

    /**
     * @return mixed
     */
    public function getPokemons()
    {
        return $this->pokemons;
    }

    /**
     * @param mixed $pokemons
     */
    public function addPokemon(Pokemon $pokemon): void
    {
        $this->pokemons[] = $pokemon;
    }

    public function loseHealth(){
        for ($i = 0; $i < count($this->pokemons); $i++) {
            $pokemon = $this->pokemons[$i];
            $health = $pokemon->getHealth() - 10;
            $pokemon->setHealth($health);

            if ($pokemon->getHealth() <= 0) {
                unset($this->pokemons[$i]);
            }
        }
    }

    public function __toString()
    {
        return $this->name . ' ' . $this->getBadges() . ' ' . count($this->getPokemons()) . PHP_EOL;
    }
}
class Pokemon
{
    private $name;
    private $element;
    private $health;

    /**
     * Pokemon constructor.
     * @param $name
     * @param $element
     * @param $health
     */
    public function __construct($name, $element, $health)
    {
        $this->setName($name);
        $this->setElement($element);
        $this->setHealth($health);
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
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param mixed $element
     */
    public function setElement($element): void
    {
        $this->element = $element;
    }

    /**
     * @return mixed
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param mixed $health
     */
    public function setHealth($health): void
    {
        $this->health = $health;
    }
}

$trainers = [];
while (true){
    $input = explode(' ', readline());

    if ($input[0] == "Tournament"){
        break;
    }

    $trainerName = $input[0];
    $pokemonName = $input[1];
    $element = $input[2];
    $health = $input[3];

    $pokemon = new Pokemon($pokemonName, $element, $health);

    if (!isset($trainers[$trainerName])){
        $trainer = new Trainer($trainerName);
        $trainers[$trainerName] = $trainer;
    }

    $trainers[$trainerName]->addPokemon($pokemon);
}

while (true){
    $input = readline();

    if ($input == "End"){
        break;
    }

    foreach ($trainers as $trainerName=>$trainer){
        $pokemons = $trainer->getPokemons();

        $hasElement = false;
        foreach ($pokemons as $pokemon){

            if ($pokemon->getElement() == $input){
                $trainer->setBadges();
                $hasElement = true;
            }
        }
        if ($pokemon->getElement() != $input && $hasElement == false){
            $trainer->loseHealth();
        }
    }
}

usort($trainers, function ($a, $b){
    return $a->getBadges() < $b->getBadges();
});

foreach ($trainers as $trainer){
    echo $trainer;
}

