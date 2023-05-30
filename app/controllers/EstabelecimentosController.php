<?php

class EstabelecimentosController
{
    public function index()
    {
        $estabelecimentosModel = new EstabelecimentosModel();
        $estabelecimentos = $estabelecimentosModel->getAllEstabelecimentos();

        include_once 'views/estabelecimentos/index.php';
    }

}