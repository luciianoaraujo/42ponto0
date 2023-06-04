<?php
    if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

    //** Faz a conexão com o banco de dados **
    if ( empty($_SERVER['SERVER_NAME'])|| preg_match('/edu.br/', $_SERVER['SERVER_NAME'])  ) {
        define('DB_NAME', '42ponto0');
        define('DB_USER', 'four2ponto0');
        define('DB_PASSWORD', 'Eh17R]x3');
        define('DB_HOST', 'localhost');
        if ( !defined('BASEURL') )
            define('BASEURL', 'https://42ponto0.faex.edu.br/42ponto0/app/');
    }else{
        define('DB_NAME', 'delivery');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('DB_HOST', 'localhost');
        if ( !defined('BASEURL') )
            define('BASEURL', 'http://localhost/42ponto0/app/');
            
    }



?>