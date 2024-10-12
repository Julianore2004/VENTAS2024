<?php
require_once '../model/venta_model.php'; // Ajusta la ruta según sea necesario

class VentaControl {
    private $ventaModel;

    public function __construct() {
        $this->ventaModel = new VentaModel();
    }

    public function listarVentas() {
        return $this->ventaModel->listarVentas();
    }

    public function insertarVenta($id_persona, $fecha, $total) {
        return $this->ventaModel->insertarVenta($id_persona, $fecha, $total);
    }

    public function actualizarVenta($id, $id_persona, $fecha, $total) {
        return $this->ventaModel->actualizarVenta($id, $id_persona, $fecha, $total);
    }
}
?>
