<?php
namespace App\Controllers;

require_once '../app/models/CustomerModel.php';
require_once '../app/views/CustomerView.php';
require_once '../app/core/Database.php';

use App\Models\CustomerModel;
use App\Views\CustomerView;
use App\Core\Database;

class CustomerController {
    private $model;
    private $view;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new CustomerModel($db);
        $this->view = new CustomerView();
    }

    public function index() {
        $data = $this->model->read();
        $this->view->render($data);
    }
}
?>
