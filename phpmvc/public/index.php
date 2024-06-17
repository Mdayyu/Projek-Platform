<?php
require_once '../app/core/Database.php';
require_once '../app/controllers/CustomerController.php';

use App\Controllers\CustomerController;


session_start();
require '../system/Router.php';
require '../system/Database.php'; 

$router = new Router();
$router->route();


$controller = new CustomerController();
$controller->index();
?>
