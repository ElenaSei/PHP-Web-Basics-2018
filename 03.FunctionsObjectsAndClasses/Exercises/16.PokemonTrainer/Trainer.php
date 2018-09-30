<?php
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
                $i--;
            }
        }
    }

    public function __toString()
    {
        return $this->name . ' ' . $this->getBadges() . ' ' . count($this->getPokemons()) . PHP_EOL;
    }
}