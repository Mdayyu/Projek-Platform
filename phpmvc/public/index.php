<?php
require_once '../app/core/Database.php';
require_once '../app/controllers/CustomerController.php';

use App\Controllers\CustomerController;

$controller = new CustomerController();
$controller->index();
?>
