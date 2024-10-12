<?php
require_once '../config/config.php'; // Ajusta la ruta según sea necesario

class DetVentaModel {
    private $conexion;

    public function __construct() {
        global $conexion; // Utiliza la conexión global definida en config.php
        $this->conexion = $conexion;
    }

    // Método para listar detalles de venta
    public function listarDetVentas() {
        $sql = "SELECT * FROM det_venta";
        $resultado = $this->conexion->query($sql);

        $det_ventas = [];
        while ($fila = $resultado->fetch_assoc()) {
            $det_ventas[] = $fila;
        }

        return $det_ventas;
    }

    // Método para insertar un detalle de venta
    public function insertarDetVenta($id_venta, $id_producto, $cantidad) {
        $sql = "INSERT INTO det_venta (id_venta, id_producto, cantidad) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("iii", $id_venta, $id_producto, $cantidad);
        return $stmt->execute();
    }

    // Método para actualizar un detalle de venta
    public function actualizarDetVenta($id, $id_venta, $id_producto, $cantidad) {
        $sql = "UPDATE det_venta SET id_venta = ?, id_producto = ?, cantidad = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("iiii", $id_venta, $id_producto, $cantidad, $id);
        return $stmt->execute();
    }
}
?>

