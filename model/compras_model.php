<?php

require_once(__DIR__ . '../../config/config.php');
class ComprasModel {
    private $conexion;

    public function __construct() {
        $this->conexion = $GLOBALS['conexion'];
    }

    public function listar() {
        $query = "SELECT * FROM compras";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($data) {
        $query = "INSERT INTO compras (id_producto, cantidad, precio, id_trabajador) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("iidi", $data['id_producto'], $data['cantidad'], $data['precio'], $data['id_trabajador']);
        return $stmt->execute();
    }

    public function actualizar($id, $data) {
        $query = "UPDATE compras SET id_producto = ?, cantidad = ?, precio = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("iidi", $data['id_producto'], $data['cantidad'], $data['precio'], $id);
        return $stmt->execute();
    }
    public function obtenerCompraPorId($id) {
        $query = "SELECT * FROM compras WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc(); // Retorna una sola compra como un arreglo asociativo
    }
}
?>
