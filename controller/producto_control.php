<?php
require_once '../model/producto_model.php'; // Ajusta la ruta según sea necesario

class ProductoControl {
    private $productoModel;

    public function __construct() {
        $this->productoModel = new ProductoModel();
    }

    public function listarProductos() {
        return $this->productoModel->listarProductos();
    }

    public function insertarProducto($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $img, $id_proveedor) {
        return $this->productoModel->insertarProducto($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $img, $id_proveedor);
    }

    public function actualizarProducto($id, $codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $img, $id_proveedor) {
        return $this->productoModel->actualizarProducto($id, $codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $img, $id_proveedor);
    }
}
?>
