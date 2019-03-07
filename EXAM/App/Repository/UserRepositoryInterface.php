<?php

namespace App\Repository;

use App\Data\UserDTO;

interface UserRepositoryInterface
{
    public function insert(UserDTO $user) : bool;

    public function update(UserDTO $user, int $id) : bool ;

    public function delete(int $id) : bool ;

    /** @return \Generator|UserDTO */
    public function findAll() : \Generator;

    public function findOneByUsername(string $username): ?UserDTO;

    public function findOneById(int $id): ?UserDTO;
}