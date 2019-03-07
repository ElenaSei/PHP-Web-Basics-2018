<?php

namespace App\Http;

use App\Data\ErrorDTO;

class BookHttpHandler extends \App\Http\HttpHandlerAbstract{

    public function addBook(\App\Service\BookServiceInterface $bookService, \App\Service\UserServiceInterface $userService, \App\Service\GenreServiceInterface $genreService, $formData){
        if (isset($formData['add'])){

            $genre = $genreService->getOneById($formData['genre_id']);
            $user = $userService->getCurrentUser();

            $book = \App\Data\BookDTO::create(
                $formData['title'],
                $formData['author'],
                $formData['description'],
                $formData['image'],
                $genre,
                $user
            );

            if ($bookService->addBook($book)){
                $this->redirect('myBooks.php');
            }else{
                $this->render('app/error',
                    new ErrorDTO("Couldn't add the book!"));
            }
        }else {
            $genres = $genreService->getAll();

            $this->render('book/add_book', $genres);
        }
    }

    public function myBooks(\App\Service\BookServiceInterface $bookService, \App\Service\UserServiceInterface $userService){
        $user = $userService->getCurrentUser();

        if ($user === null){
            $this->render('app/error',
                new ErrorDTO("Wrong user!"));
        }

        $books = $bookService->getMyBooks($user->getId());

        $this->render('book/my_books', $books);
    }

    public function allBooks(\App\Service\BookServiceInterface $bookService){
        $allBooks = $bookService->getAllBooks();

        $this->render('book/all_books', $allBooks);
    }

    public function viewBook(\App\Service\BookServiceInterface $bookService, $getData){
        $bookId = $getData['id'];

        $book = $bookService->findOneById($bookId);

        if ($book === null){
            $this->render('app/error',
                new ErrorDTO("Wrong book!"));
        }else{
            $this->render('book/view_book', $book);
        }
    }

    public function editBook(\App\Service\BookService $bookService,  \App\Service\UserServiceInterface $userService, \App\Service\GenreService $genreService, $formData, $getData){
        if (isset($formData['edit'])){

            $genre = $genreService->getOneById($formData['genre_id']);

            $user = $userService->getCurrentUser();

            if ($user === null){
                $this->render('app/error',
                    new ErrorDTO("Wrong user!"));
            }

            $book = \App\Data\BookDTO::create(
                $formData['title'],
                $formData['author'],
                $formData['description'],
                $formData['image'],
                $genre,
                $user
            );

            if ($bookService->editBook($book, $getData['id'])){
                $this->redirect('myBooks.php');
            }else{
                $this->render('app/error',
                    new ErrorDTO("Couldn't edit the book!"));
            }
        }else{
            $bookId = $getData['id'];

            $book = $bookService->findOneById($bookId);

            if ($book === null){
                $this->render('app/error',
                    new ErrorDTO("Wrong book!"));
            }

            $genres = $genreService->getAll();

            $edit = \App\Data\EditDTO::create($book, $genres);

            $this->render('book/edit_book', $edit);

        }
    }

    public function deleteBook(\App\Service\BookService $bookService, $getData){

        $bookId = $getData['id'];

        $bookUserId = $bookService->findOneById($bookId)->getUser()->getId();


        if (!isset($_SESSION['id'])){
            $this->render('app/error',
                new ErrorDTO("User is not logged in!"));
        }

        if ($bookUserId !== $_SESSION['id']){
            $this->render('app/error',
                new ErrorDTO("Fuck you!"));
        }

        $bookService->deleteOne($bookId);

        $this->redirect('myBooks.php');
    }
}