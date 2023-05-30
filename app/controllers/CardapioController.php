<?php

class CardapioController
{
    public function index()
    {
        $estabelecimentoId = $_GET['id'];

        $cardapioModel = new CardapioModel();
        $cardapio = $cardapioModel->getCardapioByEstabelecimento($estabelecimentoId);

        include_once 'views/estabelecimento/cardapio.php';
    }
}