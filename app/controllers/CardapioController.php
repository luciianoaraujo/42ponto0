<?php

namespace Controllers;
use Models\CardapioModel;
use PDO;

class CardapioController
{
    public function showCardapio()
    {
        $estabelecimentoId = $_GET['id'];

        $cardapioModel = new CardapioModel();
        $cardapio = $cardapioModel->getCardapioByEstabelecimento($estabelecimentoId);
        $data = [
            'cardapio' => $cardapio,
        ];
        $this->render('../../../views/estabelecimentos/cardapio.php', $data);

    }
    private function render($view, $data)
    {
        extract($data); // Extract the variables from the data array
        include_once $view;  // Include the view file
    }
}