<?php
require_once '../model/admin_model.php'; // Ajusta la ruta según sea necesario

class AdminControl {
    private $adminModel;

    public function __construct() {
        $this->adminModel = new AdminModel();
    }

    public function listarPersonas() {
        return $this->adminModel->listarPersonas();
    }
}
?>

