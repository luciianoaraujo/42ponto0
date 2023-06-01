<?php

namespace Controllers;

class LogoutController
{
    public function logout()
    {
        session_start();

        
        $_SESSION = array();

       
        session_destroy();

        
        header('Location: /42ponto0/app/');
        exit;
    }
}