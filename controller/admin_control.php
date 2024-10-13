<?php
require_once './model/admin_model.php';

class AdminControl {
    private $adminModel;

    public function __construct() {
        $this->adminModel = new AdminModel();
    }

    public function listarAdmins() {
        return $this->adminModel->listar();
    }

    public function insertarAdmin($data) {
        return $this->adminModel->insertar($data);
    }

    public function actualizarAdmin($id, $data) {
        return $this->adminModel->actualizar($id, $data);
    }
}
?>
