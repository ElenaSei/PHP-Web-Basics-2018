<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 18:47
 */

namespace App\Repository;


use App\Data\BookDTO;

interface BookRepositoryInterface
{
    public function insert(BookDTO $book): bool;

    public function selectMyBooks(int $id): \Generator;

    public function update(BookDTO $book, int $id): bool;

    public function selectOne(int $id): ?BookDTO;

    public function delete(int $id): bool;

    /** @return \Generator|BookDTO */
    public function selectAll(): \Generator;

}