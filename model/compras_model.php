<?php
require_once '../config/config.php'; // Ajusta la ruta según sea necesario

class ComprasModel {
    private $conexion;

    public function __construct() {
        global $conexion; // Utiliza la conexión global definida en config.php
        $this->conexion = $conexion;
    }

    // Método para listar compras
    public function listarCompras() {
        $sql = "SELECT * FROM compras";
        $resultado = $this->conexion->query($sql);

        $compras = [];
        while ($fila = $resultado->fetch_assoc()) {
            $compras[] = $fila;
        }

        return $compras;
    }

    // Método para insertar una compra
    public function insertarCompra($id_producto, $cantidad, $precio, $id_trabajador) {
        $sql = "INSERT INTO compras (id_producto, cantidad, precio, id_trabajador) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("iidi", $id_producto, $cantidad, $precio, $id_trabajador);
        return $stmt->execute();
    }

    // Método para actualizar una compra
    public function actualizarCompra($id, $id_producto, $cantidad, $precio, $id_trabajador) {
        $sql = "UPDATE compras SET id_producto = ?, cantidad = ?, precio = ?, id_trabajador = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("iidii", $id_producto, $cantidad, $precio, $id_trabajador, $id);
        return $stmt->execute();
    }
}
?>
