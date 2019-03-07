<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 18:45
 */

namespace App\Data;


class GenreDTO
{
    private $id;

    private $name;

    public static function create($id, $name)
    {
        return (new GenreDTO())
            ->setId($id)
            ->setName($name);
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    public function setId($id): GenreDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name): GenreDTO
    {
        $this->name = $name;
        return $this;
    }


}