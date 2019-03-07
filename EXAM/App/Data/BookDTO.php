<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 18:43
 */

namespace App\Data;


class BookDTO
{
    private $id;

    private $title;

    private $author;

    private $description;

    private $image;

    /**
     * @var GenreDTO
     */
    private $genre;

    /**
     * @var UserDTO
     */
    private $user;

    /**
     * BookDTO constructor.
     * @param $id
     * @param $title
     * @param $author
     * @param $description
     * @param $image
     * @param GenreDTO $genre
     * @param UserDTO $user
     */
    public static function create($title, $author, $description, $image, GenreDTO $genre, UserDTO $user, $id = null)
    {
        return (new BookDTO())
            ->setId($id)
            ->setAuthor($author)
            ->setTitle($title)
            ->setDescription($description)
            ->setImage($image)
            ->setGenre($genre)
            ->setUser($user);
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): BookDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): BookDTO
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): BookDTO
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): BookDTO
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): BookDTO
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @return GenreDTO
     */
    public function getGenre(): GenreDTO
    {
        return $this->genre;
    }

    /**
     * @param GenreDTO $genre
     */
    public function setGenre(GenreDTO $genre): BookDTO
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * @return UserDTO
     */
    public function getUser(): UserDTO
    {
        return $this->user;
    }

    /**
     * @param UserDTO $user
     */
    public function setUser(UserDTO $user): BookDTO
    {
        $this->user = $user;

        return $this;
    }



}