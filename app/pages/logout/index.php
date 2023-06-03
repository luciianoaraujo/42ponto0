<?php 
  require_once '../../includes/config.php'; 
  require_once '../../../vendor/autoload.php';
  require_once '../../config/routes.php';     
  $url = $_SERVER['REQUEST_URI'];
  handleRoute($url);
?>
