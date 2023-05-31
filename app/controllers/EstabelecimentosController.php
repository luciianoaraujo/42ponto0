<?php

namespace Controllers;

use Models\EstabelecimentosModel;

class EstabelecimentosController
{
    public function listarEstabelecimentos()
    {
        $estabelecimentosModel = new EstabelecimentosModel;
        $estabelecimentos = $estabelecimentosModel->getAllEstabelecimentos();
        var_dump($estabelecimentos);

        include_once '../../views/estabelecimentos/index.php';
        
    }

   
}

