<?php /** @var \App\Data\BookDTO[] $data */ ?>

<h1>MY BOOKS</h1>
<a href="addBook.php">Add New Book</a> | <a href="profile.php">My Profile</a> | <a href="logout.php">Logout</a><br>
<table border="1">
    <tr style="border: black">
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
        <?php foreach ($data as $book): ?>
    <tr>
            <td><?= $book->getTitle() ?></td>
            <td><?= $book->getAuthor() ?></td>
            <td><?= $book->getGenre()->getName()?></td>
            <td><a href="editBook.php?id=<?= $book->getId() ?>">Edit</a></td>
            <td><a href="deleteBook.php?id=<?= $book->getId() ?>">Delete</a></td>
    </tr>
        <?php endforeach; ?>
</table>


