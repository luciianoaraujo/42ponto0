<?php

namespace Controllers;
use App\config\Database;
use Models\RegisterModel;

class RegisterController
{

    public function handleRegisterForm(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->register();
        } else {
            $this->showRegisterForm();
        }
    }

    public function showRegisterForm($error = null)
    {
        $data = ['error' => $error];
        $this->render('../../views/register/index.php', $data);
    }

    public function register()
    {
        $nome = $_POST['register_nome'];
        $cnpj = $_POST['register_cnpj'];
        $email = $_POST['register_email'];
        $password = $_POST['register_password'];
        $telefone = $_POST['register_telefone'];
        $imagem = $_POST['register_imagem'];
        if (empty($nome) || empty($cnpj) || empty($email) || empty($password) || empty($telefone) || empty($imagem)) {
            $error = 'Todos os campos são obrigatórios.';
            $this->showRegisterForm($error);
            return;
        }
    
        $userModel = new RegisterModel;
        $userModel->createEstabelecimento($nome, $cnpj, $email, $password, $telefone, $imagem);
    
        header('Location: /42ponto0/app/pages/dashboard');
    }

    private function render($view, $data)
    {
        extract($data); // Extract the variables from the data array
        include_once $view;  // Include the view file
    }
}