<?php

use Controllers\CardapioController;
use Controllers\EstabelecimentosController;
use Controllers\LoginController;

$routes = [
    '/42ponto0/app/pages/estabelecimentos' => [EstabelecimentosController::class, 'listarEstabelecimentos'],
    '/42ponto0/app/pages/estabelecimentos/cardapio/' => [CardapioController::class, 'index'],
    '/42ponto0/app/pages/login' => [LoginController::class, 'showLoginForm']
];

function handleRoute($url)
{
    global $routes;


    $url = rtrim($url, '/');
    $path = parse_url($url, PHP_URL_PATH);


    if (array_key_exists($path, $routes)) {
        $controllerClass = $routes[$path][0];
        $method = $routes[$path][1];
        $controller = new $controllerClass;
        $controller->$method();

    } else {
        echo "404 - Rota não encontrada";
    }
}

