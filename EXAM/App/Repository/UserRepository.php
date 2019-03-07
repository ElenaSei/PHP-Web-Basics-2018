<?php

namespace App\Repository;
//include 'UserRepositoryInterface.php';

use App\Data\UserDTO;
use Database\DatabaseInterface;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * UserRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }


    public function insert(UserDTO $user): bool
    {
        $query = $this->db->query('
            INSERT INTO exam.users (username, password, first_name, last_name)
            VALUES (:username, :password, :first_name, :last_name)
            ');

        $query->execute([
            'username'=>$user->getUsername(),
            'password' => $user->getPassword(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName()
        ]);

        return true; //don't catch an error and always return true!
    }

    public function update(UserDTO $user, int $id): bool
    {
        $query = $this->db->query('UPDATE exam.users
                                            SET username = :username,
                                                password = :password,
                                                first_name = :first_name,
                                                last_name = :last_name
                                            WHERE id = :id');

        $query->execute([
            'username'=>$user->getUsername(),
            'password' => $user->getPassword(),
            'first_name' => $user->getFirstName(),
            'last_name' => $user->getLastName(),
            'id' => $id]);

        return true;
    }

    public function delete(int $id): bool
    {
        $query = $this->db->query('DELETE FROM exam.users WHERE id = :id');
        $query->execute(['id' => $id]);

        return true; //doesn't catch an error!
    }

    /** @return \Generator|UserDTO */
    public function findAll(): \Generator
    {
        $query = $this->db->query('SELECT id, username, first_name AS firstName, last_name AS lastName FROM exam.users');

        return $query->execute()->fetch(UserDTO::class);
    }

    public function findOneByUsername(string $username): ?UserDTO
    {
        $query = $this->db->query('SELECT
                                                id,
                                                username,
                                                password,
                                                first_name AS firstName,
                                                last_name AS lastName
                                            FROM exam.users
                                            WHERE username = :username');

        return $query->execute(['username' => $username])->fetch(UserDTO::class)->current();
    }

    public function findOneById(int $id): ?UserDTO
    {
        $query = $this->db->query('SELECT
                                                id,
                                                username,
                                                password,
                                                first_name AS firstName,
                                                last_name AS lastName
                                            FROM exam.users
                                            WHERE id = :id');

        return $query->execute(['id' => $id])->fetch(UserDTO::class)->current();
    }
}