<?php

namespace App\Service;

use App\Data\BookDTO;
use App\Data\UserDTO;

interface UserServiceInterface
{
    public function register(UserDTO $user, string $confirmPassword): bool;

    public function edit(UserDTO $user): bool;

    public function delete(int $id): bool;

    /** @return \Generator|UserDTO */
    public function viewAll(): \Generator;

    public function login(string $username, string $password): ?UserDTO;

    public function getCurrentUser(): ?UserDTO;
}