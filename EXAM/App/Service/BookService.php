<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 18:46
 */

namespace App\Service;
//include 'BookServiceInterface.php';


use App\Data\BookDTO;
use App\Repository\BookRepositoryInterface;

class BookService implements BookServiceInterface
{
    /**
     * @var BookRepositoryInterface
     */
    private $repository;

    /**
     * BookService constructor.
     * @param BookRepositoryInterface $repository
     */
    public function __construct(BookRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function addBook(BookDTO $book): bool
    {
        return $this->repository->insert($book);
    }

    public function getMyBooks(int $id): \Generator
    {
        return $this->repository->selectMyBooks($id);
    }

    public function editBook(BookDTO $book, int $id): bool
    {
        return $this->repository->update($book, $id);
    }

    public function findOneById(int $id): ?BookDTO
    {
        return $this->repository->selectOne($id);
    }

    public function deleteOne(int $id): bool
    {
        return $this->repository->delete($id);
    }

    /** @return \Generator|BookDTO */
    public function getAllBooks(): \Generator
    {
        return $this->repository->selectAll();
    }
}