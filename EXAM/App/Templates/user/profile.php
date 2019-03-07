<?php /** @var \App\Data\UserDTO $data */ ?>

<h1>Hello, <?= $data->getFirstName() . ' ' . $data->getLastName()?></h1>

<a href="addBook.php">Add New Book</a><br>
<a href="myBooks.php">My Books</a><br>
<a href="allBooks.php">All Books</a><br>
<a href="logout.php">Logout</a><br>