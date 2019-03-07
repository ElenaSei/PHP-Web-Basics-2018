<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 18:47
 */

namespace App\Repository;
//include 'BookRepositoryInterface.php';

use App\Data\BookDTO;
use App\Data\GenreDTO;
use App\Data\UserDTO;
use Database\DatabaseInterface;

class BookRepository implements BookRepositoryInterface
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

    public function insert(BookDTO $book): bool
    {
        $query = $this->db->query('
            INSERT INTO exam.books (title, author, description, image, genre_id, user_id)
            VALUES (:title, :author, :description, :image, :genre_id, :user_id)
            ');

        $query->execute([
            'title' => $book->getTitle(),
            'author' => $book->getAuthor(),
            'description' => $book->getDescription(),
            'image' => $book->getImage(),
            'genre_id' => $book->getGenre()->getId(),
            'user_id' => $book->getUser()->getId()
        ]);

        return true;

    }

    public function selectMyBooks(int $id): \Generator
    {
        $result= $this->db->query('
            SELECT books.id, title, author, description, image, genre_id, name, user_id, username
            FROM books
            INNER JOIN genre USING (genre_id)
            INNER JOIN users ON users.id = books.user_id AND users.id = ?
            GROUP BY books.id
            ')->execute(array($id))->fetch();

        foreach ($result as $row){
            $genre = GenreDTO::create($row['genre_id'], $row['name']);

            $user = new UserDTO();
            $user->setId($row['user_id']);
            $user->setUsername($row['username']);

            $book = BookDTO::create($row['title'], $row['author'], $row['description'], $row['image'], $genre, $user, $row['id']);

            yield $book;
        }
    }


    public function update(BookDTO $book, int $id): bool
    {
        $query= $this->db->query('
            UPDATE books
            SET title = :title,
            author = :author,
            description = :description,
            image = :image,
            genre_id = :genre_id,
            user_id = :user_id
            WHERE id = :id
            ');

        $query->execute([
            'title' => $book->getTitle(),
            'author' => $book->getAuthor(),
            'description' => $book->getDescription(),
            'image' => $book->getImage(),
            'genre_id' => $book->getGenre()->getId(),
            'user_id' => $book->getUser()->getId(),
            'id' => $id
        ]);

        return true;

    }

    public function selectOne(int $id): ?BookDTO
    {
        $result= $this->db->query('
            SELECT books.id, title, author, description, image, genre_id, name, user_id, username
            FROM books
            INNER JOIN genre USING (genre_id)
            INNER JOIN users ON users.id = books.user_id AND books.id = :id
            GROUP BY books.id
            ')->execute(['id' => $id])->fetch();

        foreach ($result as $row){
            $genre = GenreDTO::create($row['genre_id'], $row['name']);

            $user = new UserDTO();
            $user->setId($row['user_id']);
            $user->setUsername($row['username']);

            $book = BookDTO::create($row['title'], $row['author'], $row['description'], $row['image'], $genre, $user, $row['id']);

            return $book;
        }
    }


    public function delete(int $id): bool
    {
        $this->db->query('
            DELETE FROM books WHERE id = :id')
            ->execute(['id' => $id]);

        return true;
    }

    /** @return \Generator|BookDTO */
    public function selectAll(): \Generator
    {
        $result= $this->db->query('
            SELECT books.id, title, author, description, image, genre_id, name, user_id, username
            FROM books
            INNER JOIN genre USING (genre_id)
            INNER JOIN users ON users.id = books.user_id
            GROUP BY books.id
            ')->execute()->fetch();

        foreach ($result as $row){
            $genre = GenreDTO::create($row['genre_id'], $row['name']);

            $user = new UserDTO();
            $user->setId($row['user_id']);
            $user->setUsername($row['username']);

            $book = BookDTO::create($row['title'], $row['author'], $row['description'], $row['image'], $genre, $user, $row['id']);

            yield $book;
        }
    }
}