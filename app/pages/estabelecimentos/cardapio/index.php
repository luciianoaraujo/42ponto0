<?php 
  if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

  require_once ABSPATH . '../../../includes/config.php'; 
  require_once ABSPATH . '../../../../vendor/autoload.php';
  require_once ABSPATH . '../../../config/routes.php';     
  $url = $_SERVER['REQUEST_URI'];
  handleRoute($url);
?>