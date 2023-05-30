<?php

use app\controllers\EstabelecimentosController;
use app\controllers\CardapioController;

$routes = [
    '/' => [EstabelecimentosController::class, 'index'],
    '/estabelecimentos' => [EstabelecimentosController::class, 'index'],
    '/estabelecimentos/cardapio' => [EstabelecimentosController::class, 'cardapio'],
    '/login' => [LoginController::class, 'index'],
];

function handleRoute($url)
{
    global $routes;

    if (array_key_exists($url, $routes)) {
        $controller = new $routes[$url][0]();
        $method = $routes[$url][1];
        $controller->$method();
    } else {
        echo "404 - Rota não encontrada";
    }
}

?>
