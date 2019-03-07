<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 19:02
 */

namespace App\Service;
//include 'GenreServiceInterface.php';


use App\Data\GenreDTO;
use App\Repository\GenreRepositoryInterface;

class GenreService implements GenreServiceInterface
{
    /**
     * @var GenreRepositoryInterface
     */
    private $repository;

    /**
     * GenreService constructor.
     * @param GenreRepositoryInterface $repository
     */
    public function __construct(GenreRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function getOneById(int $id): ?GenreDTO
    {
        return $this->repository->selectOneById($id);
    }

    public function getAll(): \Generator
    {
        return $this->repository->selectAll();
    }
}