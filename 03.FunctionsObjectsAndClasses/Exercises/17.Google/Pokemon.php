<?php
class Pokemon
{
    private $pokemonName;
    private $pokemonType;

    /**
     * Pokemon constructor.
     * @param $pokemonName
     * @param $pokemonType
     */
    public function __construct($pokemonName, $pokemonType)
    {
        $this->setPokemonName($pokemonName);
        $this->setPokemonType($pokemonType);
    }

    /**
     * @return mixed
     */
    public function getPokemonName()
    {
        return $this->pokemonName;
    }

    /**
     * @param mixed $pokemonName
     */
    public function setPokemonName($pokemonName): void
    {
        $this->pokemonName = $pokemonName;
    }

    /**
     * @return mixed
     */
    public function getPokemonType()
    {
        return $this->pokemonType;
    }

    /**
     * @param mixed $pokemonType
     */
    public function setPokemonType($pokemonType): void
    {
        $this->pokemonType = $pokemonType;
    }


}