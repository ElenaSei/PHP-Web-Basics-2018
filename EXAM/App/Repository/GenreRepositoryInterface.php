<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 19:02
 */

namespace App\Repository;


use App\Data\GenreDTO;

interface GenreRepositoryInterface
{
    public function selectOneById(int $id): ?GenreDTO;

    public function selectAll(): \Generator;

}