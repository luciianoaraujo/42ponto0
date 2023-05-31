<?php

use Controllers\EstabelecimentosController;

$routes = [
    '/42ponto0/app/views/estabelecimentos' => [EstabelecimentosController::class, 'listarEstabelecimentos'],
    '/estabelecimentos/cardapio' => [CardapioController::class, 'exibirCardapio'],
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

