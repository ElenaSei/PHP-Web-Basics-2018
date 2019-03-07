<?php /** @var \App\Data\BookDTO[] $data */ ?>

<h1>ALL BOOKS</h1>

<a href="addBook.php">Add New Book</a> | <a href="profile.php">My Profile</a> | <a href="logout.php">Logout</a><br>
<table border="1">
    <tr style="border: black">
        <th>Title</th>
        <th>Author</th>
        <th>Genre</th>
        <th>Added by User</th>
        <th>Details</th>
    </tr>
    <?php foreach ($data as $book): ?>
        <tr>
            <td><?= $book->getTitle() ?></td>
            <td><?= $book->getAuthor() ?></td>
            <td><?= $book->getGenre()->getName()?></td>
            <td><?= $book->getUser()->getUsername()?></td>
            <td><a href="viewBook.php?id=<?= $book->getId() ?>">Details</a></td>
        </tr>
    <?php endforeach; ?>
</table>
