<?php
require_once '../config/config.php'; // Ajusta la ruta según sea necesario

class ProductoModel {
    private $conexion;

    public function __construct() {
        global $conexion; // Utiliza la conexión global definida en config.php
        $this->conexion = $conexion;
    }

    // Método para listar productos
    public function listarProductos() {
        $sql = "SELECT * FROM producto";
        $resultado = $this->conexion->query($sql);

        $productos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $productos[] = $fila;
        }

        return $productos;
    }

    // Método para insertar un producto
    public function insertarProducto($codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $img, $id_proveedor) {
        $sql = "INSERT INTO producto (codigo, nombre, detalle, precio, stock, id_categoria, img, id_proveedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("sssdiiis", $codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $img, $id_proveedor);
        return $stmt->execute();
    }

    // Método para actualizar un producto
    public function actualizarProducto($id, $codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $img, $id_proveedor) {
        $sql = "UPDATE producto SET codigo = ?, nombre = ?, detalle = ?, precio = ?, stock = ?, id_categoria = ?, img = ?, id_proveedor = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("sssdiiisi", $codigo, $nombre, $detalle, $precio, $stock, $id_categoria, $img, $id_proveedor, $id);
        return $stmt->execute();
    }
}
?>
