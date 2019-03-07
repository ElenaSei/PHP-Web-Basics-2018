<?php /** @var \App\Data\EditDTO $data */ ?>

<h1>EDIT BOOK</h1>

<a href="profile.php">My Profile</a>
<form method="POST">
    <div>
        <label>
            Book Title: <input type="text" name="title" value="<?= $data->getBook()->getTitle() ?>">
        </label>
    </div>

    <div>
        <label>
            Book Author: <input type="text" name="author"  value="<?= $data->getBook()->getAuthor() ?>">
        </label>
    </div>

    <div>
        <label>
            Description: <textarea name="description"><?= $data->getBook()->getDescription() ?></textarea>
        </label>
    </div>

    <div>
        <label>
            Image URL <input type="text" name="image"  value="<?= $data->getBook()->getImage() ?>">
        </label>
    </div>

    <div>
        Genre:
        <select name="genre_id">

            <?php foreach ($data->getGenres() as $genre): ?>
                <option value="<?= $genre->getId() ?>"><?= $genre->getName()?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <input type="submit" name="edit" value="Edit">
    </div>
    
    <img src="<?= $data->getBook()->getImage() ?>">

</form>
