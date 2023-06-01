<?php

use Controllers\CardapioController;
use Controllers\DashboardController;
use Controllers\EstabelecimentosController;
use Controllers\LoginController;
use Controllers\RegisterController;

$routes = [
    '/42ponto0/app/pages/estabelecimentos' => [EstabelecimentosController::class, 'listarEstabelecimentos'],
    '/42ponto0/app/pages/estabelecimentos/cardapio/' => [CardapioController::class, 'showCardapio'],
    '/42ponto0/app/pages/login' => [LoginController::class, 'handleLoginForm'],
    '/42ponto0/app/pages/register' => [RegisterController::class, 'handleRegisterForm'],
    '/42ponto0/app/pages/dashboard/' => [DashboardController::class, 'showDashboard'],
    
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

