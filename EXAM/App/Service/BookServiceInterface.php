<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 18:41
 */

namespace App\Service;


use App\Data\BookDTO;

interface BookServiceInterface
{
    public function addBook(BookDTO $book): bool;

    public function getMyBooks(int $id): \Generator;

    public function editBook(BookDTO $book, int $id): bool;

    public function findOneById(int $id): ?BookDTO;

    public function deleteOne(int $id): bool;

    /** @return \Generator|BookDTO */
    public function getAllBooks(): \Generator;

}