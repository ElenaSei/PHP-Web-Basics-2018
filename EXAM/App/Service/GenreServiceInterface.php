<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 19:01
 */

namespace App\Service;


use App\Data\GenreDTO;

interface GenreServiceInterface
{
    public function getOneById(int $id): ?GenreDTO;

    public function getAll(): \Generator;

}