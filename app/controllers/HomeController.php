<?php

namespace Controllers;

class HomeController {

    public function showHome()
    {

        $data = [];
        $this->render('../pages/home/index.php', $data);
        
    }

    private function render($view, $data)
    {
        extract($data); // Extract the variables from the data array
        include_once $view;  // Include the view file
    }

        
}

