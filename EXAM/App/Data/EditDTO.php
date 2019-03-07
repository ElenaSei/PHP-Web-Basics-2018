<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 10.11.18
 * Time: 10:26
 */

namespace App\Data;


class EditDTO
{
    /**
     * @var BookDTO
     */
    private $book;

    /**
     * @var \Generator|GenreDTO[]
     */
    private $genres;


    public static function create(BookDTO $book, $genres)
    {
        return (new EditDTO())
            ->setBook($book)
            ->setGenres($genres);
    }

    /**
     * @return BookDTO
     */
    public function getBook(): BookDTO
    {
        return $this->book;
    }

    public function setBook(BookDTO $book): EditDTO
    {
        $this->book = $book;

        return $this;
    }

    /**
     * @return \Generator|GenreDTO[]
     */
    public function getGenres(): \Generator
    {
        return $this->genres;
    }

    public function setGenres($genres): EditDTO
    {
        $this->genres = $genres;

        return $this;
    }



}