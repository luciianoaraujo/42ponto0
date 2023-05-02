<?php
    if(isset($_POST['email']) and !empty($_POST['email'])){
        $email = $_POST['email'];
        $senha = $_POST['password'];

        require_once 'bdConnect.php';
        $sql = "SELECT * FROM estabelecimentos WHERE email='$email' and senha='$senha'";
        $exec = $conn->query($sql);
        if($exec->rowCount() > 0){
            session_start();
            $_SESSION['email'] = $email; // Armazena o e-mail do usuário na sessão
            header('Location: ../home/restaurante.php'); // Redireciona para a página do restaurante
            exit(); // Encerra o script
        }
        else{
            header('Location: ../home/login.php?msg=1');
            exit(); // Encerra o script
        }        
    }
?>
