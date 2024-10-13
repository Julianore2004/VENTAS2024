<?php
require_once __DIR__ . '/../model/pagos_model.php';

class PagosControl {
    private $pagosModel;

    public function __construct() {
        $this->pagosModel = new PagosModel();
    }

    public function listarPagos() {
        return $this->pagosModel->listar();
    }

    public function insertarPago($data) {
        return $this->pagosModel->insertar($data);
    }

    public function actualizarPago($id, $data) {
        return $this->pagosModel->actualizar($id, $data);
    }
}
?>
