<?php /** @var \App\Data\UserDTO[] $data */ ?>
<h1>All users</h1>
<table border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>FullName</th>
        <th>Birthday</th>
    </tr>
    </thead>

    <tbody>
        <?php foreach ($data as $user): ?>
        <tr>
            <td><?= $user->getId() ?></td>
            <td><?= $user->getUsername() ?></td>
            <td><?= $user->getFirstName() . " " . $user->getLastName() ?></td>
            <td><?= $user->getBornOn() ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>

Go back to your <a href="profile.php">your profile</a>