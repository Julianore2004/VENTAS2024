<?php
require_once __DIR__ . '/../model/det_venta_model.php';

class DetVentaControl {
    private $detVentaModel;

    public function __construct() {
        $this->detVentaModel = new DetVentaModel();
    }

    public function listarDetVentas() {
        return $this->detVentaModel->listar();
    }

    public function insertarDetVenta($data) {
        return $this->detVentaModel->insertar($data);
    }

    public function actualizarDetVenta($id, $data) {
        return $this->detVentaModel->actualizar($id, $data);
    }
}
?>


