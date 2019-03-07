<?php

//namespace App;


session_start();
//set_include_path("/opt/lampp/htdocs/EXAM/App/");

/*
//include 'Database/PDODatabase.php';
//include 'App/Repository/UserRepository.php';
//include 'App/Service/UserService.php';
//include 'App/Http/HttpHandlerAbstract.php';
//include 'Core/Template.php';
//include 'App/Http/HttpHandler.php';
//include 'App/Repository/GenreRepository.php';
//include 'App/Service/GenreService.php';
//include 'App/Repository/BookRepository.php';
//include 'App/Service/BookService.php';
//include 'App/Http/BookHttpHandler.php';
*/


spl_autoload_register(function ($class_name) {
    $class_name = str_replace( '\\', '/', $class_name);
    include  $class_name . '.php';
});




$config = parse_ini_file('Config/db.ini');
$pdo = new \PDO($config['dsn'], $config['user'], $config['pass'], array(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION));

$db = new \Database\PDODatabase($pdo);
$userRepository = new \App\Repository\UserRepository($db);
$userService = new \App\Service\UserService($userRepository);
$template = new \Core\Template();
$userHttpHandler = new \App\Http\HttpHandler($template);

$genreRepository = new \App\Repository\GenreRepository($db);
$genreService = new \App\Service\GenreService($genreRepository);

$bookRepository = new \App\Repository\BookRepository($db);
$bookService = new \App\Service\BookService($bookRepository);
$bookHttpHandler = new \App\Http\BookHttpHandler($template);
