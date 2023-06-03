<?php

namespace Controllers;

use Models\DashboardModel;

class DashboardController
{

    public function showDashboard()
    {
        if(!isset($_SESSION['user']['pk_id_register'])){
            header("Location: ../../pages/login");
        }
        
        //$estabelecimentoId = $_SESSION['user']['pk_id_register'];
        //$dashboardModel = new DashboardModel();
        //$dashboard = $dashboardModel->getDashboardByEstabelecimento($estabelecimentoId);

        $data = [];
        $this->render('../../views/dashboard/index.php', $data);
        
    }

    private function render($view, $data)
    {
        extract($data); // Extract the variables from the data array
        include_once $view;  // Include the view file
    }

        
}

