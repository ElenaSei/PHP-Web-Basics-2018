<?php

namespace App\Service;
//include 'UserServiceInterface.php';

use App\Data\UserDTO;
use App\Repository\UserRepositoryInterface;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepositoryInterface
     */
    private $repository;

    /**
     * UserService constructor.
     * @param UserRepositoryInterface $repository
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function register(UserDTO $user, string $confirmPassword): bool
    {
        if ($user->getPassword() !== $confirmPassword){
            return false;
        }

        if ($this->repository->findOneByUsername($user->getUsername()) !== null){
            return false;
        }


        $this->encryptPassword($user);

        return $this->repository->insert($user);
    }

    public function edit(UserDTO $user): bool
    {

        if ($this->repository->findOneByUsername($user->getUsername()) !== null){
            return false;
        }

        $id = $_SESSION['id'];
        $this->encryptPassword($user);
        return $this->repository->update($user, $id);

    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    /** @return \Generator|UserDTO */
    public function viewAll(): \Generator
    {
        return $this->repository->findAll();
    }

    public function login(string $username, string $password): ?UserDTO
    {
        $user = $this->repository->findOneByUsername($username);

        if ($user === null){
            return null;
            //throw new \Exception('Username does not exist or password mismatch!');
        }

        $passwordHash = $user->getPassword();

        if (password_verify($password, $passwordHash) === false){
            return null;
            //throw new \Exception('Username does not exist or password mismatch!');
        }

        return $user;
    }

    public function getCurrentUser(): ?UserDTO
    {
        if (!isset($_SESSION['id'])){
            return null;
        }

        $id = $_SESSION['id'];

        return $this->repository->findOneById($id);
    }

    /**
     * @param UserDTO $user
     */
    public function encryptPassword(UserDTO $user): void
    {
        $password = $user->getPassword();
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $user->setPassword($passwordHash);
    }
}