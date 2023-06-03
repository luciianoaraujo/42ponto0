<?php

namespace Controllers;

use Models\DashboardModel;

class DashboardController
{

    private $DashboardModel;

    public function __construct()
    {
        $this->DashboardModel = new DashboardModel();
    }


    public function showDashboard($error = null)
    {
        if(!isset($_SESSION['user']['pk_id_register'])){
            header("Location: ../../pages/login");
        }
        $idRestaurante = $_SESSION['user']['pk_id_register'];
        $cardapio = $this->DashboardModel->getCardapioRestaurante($idRestaurante);
 

        $data = ['error' => $error, 'cardapio' => $cardapio];
        $this->render('../../views/dashboard/index.php', $data);
        
    }

    public function cadastrarNovoItem()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            {
                $nomeItem = $_POST['nomeItem'];
                $acompanhamento = $_POST['acompanhamento'];
                $preco = $_POST['preco'];
                $tipoSelecionado = $_POST['tipoSelecionado'];
                if (!empty($nomeItem) && !empty($tipoSelecionado)){
                    
                    $this->DashboardModel->cadastrarItem($nomeItem, $acompanhamento, $preco, $tipoSelecionado);

                    header('location: ../dashboard');
                }
                else{
                    $error = 'Preencha todos os campos.';
                    $this->showDashboard($error);
                }   



            }    
        }
    }

    public function editarItemCardapio()
    {
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $novoNome = $_POST['nomeItem'];
            $novoPreco = $_POST['preco'];
            $idMenu = $_POST['pk_id_menu'];

            if (!empty($novoNome) && !empty($novoPreco)) {
                
                $novoAcompanhamento = isset($_POST['acompanhamento']) ? $_POST['acompanhamento'] : '';

                $this->DashboardModel->editarItem($novoNome, $novoAcompanhamento, $novoPreco, $idMenu);
                header('location: ../dashboard');
            } else {
                $error = 'Preencha todos os campos.';
                $this->showDashboard($error);
            }   
        }
    }

    

    private function render($view, $data)
    {
        extract($data); // Extract the variables from the data array
        include_once $view;  // Include the view file
    }

        
}

