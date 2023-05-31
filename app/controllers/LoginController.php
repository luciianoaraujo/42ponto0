<?php

namespace Controllers;

use Models\UserModel;

class LoginController
{
    public function showLoginForm()
    {
        $data = [];
        $this->render('../../views/login/index.php', $data);
    }

    public function login()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $userModel = new UserModel;
        $user = $userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user'] = $user; 
            header('Location: /dashboard.php'); 
        } else {
            header('Location: /login.php?error=1');
        }
    }

    public function register()
    {
        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $telefone = $_POST['telefone'];

        $userModel = new UserModel;
        $userModel->createUser($nome, $cnpj, $email, $password, $telefone);

        header('Location: /login.php');
    }

    private function render($view, $data)
    {
        extract($data); // Extract the variables from the data array
        include_once $view;  // Include the view file
    }
}
