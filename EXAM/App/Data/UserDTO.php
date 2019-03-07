<?php

namespace App\Data;


class UserDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * string
     */
    private $username;

    /**
     * string
     */
    private $password;

    /**
     * string
     */
    private $firstName;

    /**
     * string
     */
    private $lastName;

    /**
     * UserDTO constructor.
     * @param int $id
     * @param $username
     * @param $password
     * @param $firstName
     * @param $lastName
     * @param $bornOn
     */
    public static function create($username, $password, $firstName, $lastName, $id = null) : UserDTO
    {
       return (new UserDTO())
           ->setUsername($username)
           ->setPassword($password)
           ->setFirstName($firstName)
           ->setLastName($lastName);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): UserDTO
    {
        $this->id = $id;

        return $this;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): UserDTO
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): UserDTO
    {
        $this->password = $password;

        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName): UserDTO
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName): UserDTO
    {
        $this->lastName = $lastName;

        return $this;
    }
}