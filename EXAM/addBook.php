<?php
require_once 'common.php';

$bookHttpHandler->addBook($bookService, $userService, $genreService, $_POST);