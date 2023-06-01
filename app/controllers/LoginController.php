<?php

namespace Controllers;

use Models\LoginModel;

class LoginController
{

    public function handleLoginForm(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->login();
        } else {
            $this->showLoginForm();
        }
    }

    public function showLoginForm($error = null)
    {
        $data = ['error' => $error];

        $this->render('../../views/login/index.php', $data);
    }

    public function login()
    {
            $email = $_POST['login-email'];
            $password = $_POST['login-password'];

            $loginModel = new LoginModel;
            $user = $loginModel->validateLogin($email, $password);
            
            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                $estabelecimentoId = $user['pk_id_register']; // Obtenha o ID do estabelecimento do usuário
                header("Location: /42ponto0/app/pages/dashboard/?id=$estabelecimentoId");
                exit;
            } else {
               $error = 'Credenciais inválidas. Por favor, tente novamente.';
               $this->showLoginForm($error);
            }    
    }



    private function render($view, $data)
    {
        extract($data); // Extract the variables from the data array
        include_once $view;  // Include the view file
    }
}
