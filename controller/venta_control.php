<?php
require_once __DIR__ . '/../model/venta_model.php';

class VentaControl {
    private $ventaModel;

    public function __construct() {
        $this->ventaModel = new VentaModel();
    }

    public function listarVentas() {
        return $this->ventaModel->listar();
    }

    public function insertarVenta($data) {
        return $this->ventaModel->insertar($data);
    }

    public function actualizarVenta($id, $data) {
        return $this->ventaModel->actualizar($id, $data);
    }
}
?>
