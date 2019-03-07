<?php
/**
 * Created by PhpStorm.
 * User: Valentin
 * Date: 9.11.18
 * Time: 19:03
 */

namespace App\Repository;
//include 'GenreRepositoryInterface.php';


use App\Data\GenreDTO;
use Database\DatabaseInterface;

class GenreRepository implements GenreRepositoryInterface
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

    public function selectOneById(int $id): ?GenreDTO
    {
        return $this->db->query('
                                SELECT genre_id AS id, name
                                FROM genre
                                WHERE genre_id = ?')->execute(array($id))
            ->fetch(GenreDTO::class)
            ->current();
    }

    public function selectAll(): \Generator
    {
        return $this->db->query('
                                SELECT genre_id AS id, name
                                FROM genre')->execute()
            ->fetch(GenreDTO::class);
    }
}