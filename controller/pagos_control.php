<?php
require_once '../model/pagos_model.php'; // Ajusta la ruta según sea necesario

class PagosControl {
    private $pagosModel;

    public function __construct() {
        $this->pagosModel = new PagosModel();
    }

    public function listarPagos() {
        return $this->pagosModel->listarPagos();
    }

    public function insertarPago($id_venta, $monto, $metodo_pago, $estado) {
        return $this->pagosModel->insertarPago($id_venta, $monto, $metodo_pago, $estado);
    }

    public function actualizarPago($id, $id_venta, $monto, $metodo_pago, $estado) {
        return $this->pagosModel->actualizarPago($id, $id_venta, $monto, $metodo_pago, $estado);
    }
}
?>

