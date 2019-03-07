<?php /** @var \App\Data\GenreDTO[] $data */ ?>

<h1>ADD NEW BOOK</h1>

<a href="profile.php">Home</a>
<form method="POST">
    <div>
        <label>
            Book Title: <input type="text" name="title">
        </label>
    </div>

    <div>
        <label>
            Book Author: <input type="text" name="author">
        </label>
    </div>

    <div>
        <label>
            Description: <textarea name="description"></textarea>
        </label>
    </div>

    <div>
        <label>
            Image URL <input type="text" name="image">
        </label>
    </div>

    <div>
        Genre:
        <select name="genre_id">
            <?php foreach ($data as $genre): ?>
            <option value="<?= $genre->getId() ?>"><?= $genre->getName()?></option>
            <?php endforeach; ?>
        </select>
    </div>

    <div>
        <input type="submit" name="add" value="Add">
    </div>

</form>
