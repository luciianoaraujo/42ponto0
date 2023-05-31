<?php

namespace Controllers;

use Models\EstabelecimentosModel;

class EstabelecimentosController
{

    public function listarEstabelecimentos()
    {
        $estabelecimentosModel = new EstabelecimentosModel;
        $estabelecimentos = $estabelecimentosModel->getAllEstabelecimentos();

        
        $data = [
            'estabelecimentos' => $estabelecimentos,
        ];
        $this->render('../../views/estabelecimentos/index.php', $data);
        
    }

    private function render($view, $data)
    {
        extract($data); // Extract the variables from the data array
        include_once $view;  // Include the view file
    }

        
}

