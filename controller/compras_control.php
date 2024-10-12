<?php
require_once '../model/compras_model.php'; // Ajusta la ruta según sea necesario

class ComprasControl {
    private $comprasModel;

    public function __construct() {
        $this->comprasModel = new ComprasModel();
    }

    public function listarCompras() {
        return $this->comprasModel->listarCompras();
    }

    public function insertarCompra($id_producto, $cantidad, $precio, $id_trabajador) {
        return $this->comprasModel->insertarCompra($id_producto, $cantidad, $precio, $id_trabajador);
    }

    public function actualizarCompra($id, $id_producto, $cantidad, $precio, $id_trabajador) {
        return $this->comprasModel->actualizarCompra($id, $id_producto, $cantidad, $precio, $id_trabajador);
    }
}
?>
