<?php
require_once __DIR__ . '/../model/compras_model.php';

class ComprasControl {
    private $comprasModel;

    public function __construct() {
        $this->comprasModel = new ComprasModel();
    }

    public function listarCompras() {
        return $this->comprasModel->listar();
    }

    public function insertarCompra($data) {
        return $this->comprasModel->insertar($data);
    }

    public function actualizarCompra($id, $data) {
        return $this->comprasModel->actualizar($id, $data);
    }
}
?>

