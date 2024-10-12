<?php
require_once '../model/det_venta_model.php'; // Ajusta la ruta según sea necesario

class DetVentaControl {
    private $detVentaModel;

    public function __construct() {
        $this->detVentaModel = new DetVentaModel();
    }

    public function listarDetVentas() {
        return $this->detVentaModel->listarDetVentas();
    }

    public function insertarDetVenta($id_venta, $id_producto, $cantidad) {
        return $this->detVentaModel->insertarDetVenta($id_venta, $id_producto, $cantidad);
    }

    public function actualizarDetVenta($id, $id_venta, $id_producto, $cantidad) {
        return $this->detVentaModel->actualizarDetVenta($id, $id_venta, $id_producto, $cantidad);
    }
}
?>

