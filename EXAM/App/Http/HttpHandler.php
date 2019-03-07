<?php

namespace App\Http;

////include 'HttpHandlerAbstract.php';
////include 'App/Data/UserDTO.php';
////include 'App/Data/ErrorDTO.php';

use App\Data\ErrorDTO;
use App\Data\UserDTO;
use App\Service\UserServiceInterface;


class HttpHandler extends HttpHandlerAbstract
{
    public function register(UserServiceInterface $userService, array $formData = []){

        if (isset($formData['register'])){
            $user = UserDTO::create(
                $formData['username'],
                $formData['password'],
                $formData['first_name'],
                $formData['last_name']
            );

            if ($userService->register($user, $formData['confirm_password'])){
                $this->redirect('login.php');
            }else{
                $this->render('app/error',
                    new ErrorDTO("Username already exists or password mismatch!"));
            }

        }else{
            $this->render('user/register');
        }
    }

    public function login(UserServiceInterface $userService, array $formData = []){

        if (isset($formData['login'])){

            $user = $userService->login($formData['username'], $formData['password']);

            if ($user !== null){

                $_SESSION['id'] = $user->getId();

                $this->redirect('profile.php');

            }else{
                $this->render('app/error',
                    new ErrorDTO("Username does not exist or password mismatch!"));
            }

        }else{

            $this->render('user/login');
        }
    }

    public function getAll(UserServiceInterface $userService){
        $data = $userService->viewAll();

        $this->render('user/all', $data);
    }

    public function profile(UserServiceInterface $userService){

        $user = $userService->getCurrentUser();

        if ($user === null) {
            $this->redirect('login.php');
        }

        $this->render('user/profile', $user);
    }

    public function index(){
        $this->render('home/index');
    }

}