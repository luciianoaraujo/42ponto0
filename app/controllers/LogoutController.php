<?php

namespace Controllers;

class LogoutController
{
    public function logout()
    {
        session_destroy();
        
        
        header('Location: /42ponto0/app/');
        
    }
    

}
