<?php
require_once '../config/config.php'; // Ajusta la ruta según sea necesario

class VentaModel {
    private $conexion;

    public function __construct() {
        global $conexion; // Utiliza la conexión global definida en config.php
        $this->conexion = $conexion;
    }

    // Método para listar ventas
    public function listarVentas() {
        $sql = "SELECT * FROM venta";
        $resultado = $this->conexion->query($sql);

        $ventas = [];
        while ($fila = $resultado->fetch_assoc()) {
            $ventas[] = $fila;
        }

        return $ventas;
    }

    // Método para insertar una venta
    public function insertarVenta($id_persona, $fecha, $total) {
        $sql = "INSERT INTO venta (id_persona, fecha, total) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("isd", $id_persona, $fecha, $total);
        return $stmt->execute();
    }

    // Método para actualizar una venta
    public function actualizarVenta($id, $id_persona, $fecha, $total) {
        $sql = "UPDATE venta SET id_persona = ?, fecha = ?, total = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("isdi", $id_persona, $fecha, $total, $id);
        return $stmt->execute();
    }
}
?>
