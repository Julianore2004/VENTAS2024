<?php
require_once __DIR__ . '/../model/producto_model.php';

class ProductoControl {
    private $productoModel;

    public function __construct() {
        $this->productoModel = new ProductoModel();
    }

    public function listarProductos() {
        return $this->productoModel->listar();
    }

    public function insertarProducto($data) {
        return $this->productoModel->insertar($data);
    }

    public function actualizarProducto($id, $data) {
        return $this->productoModel->actualizar($id, $data);
    }
}
?>
