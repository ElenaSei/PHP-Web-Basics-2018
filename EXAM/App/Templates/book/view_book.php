<?php /** @var \App\Data\BookDTO $data */ ?>

<h1>VIEW BOOK</h1>

<a href="profile.php">My Profile</a><br>
<a href="allBooks.php">Home</a>
<form method="POST">
    <div>
        <label>
            Book Title: <input type="text" name="title" value="<?= $data->getTitle() ?>" readonly>
        </label>
    </div>

    <div>
        <label>
            Book Author: <input type="text" name="author"  value="<?= $data->getAuthor() ?>" readonly>
        </label>
    </div>

    <div>
        <label>
            Description: <textarea name="description" readonly><?= $data->getDescription() ?></textarea>
        </label>
    </div>
        <div>
            <label>
                Genre: <input type="text" name="image"  value="<?= $data->getGenre()->getName() ?>"readonly>
            </label>
        </div>
    <img src="<?= $data->getImage() ?>">

</form>
