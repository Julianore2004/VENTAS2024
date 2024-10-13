<?php
require_once(__DIR__ . '../../config/config.php');
class DetVentaModel {
    private $conexion;

    public function __construct() {
        $this->conexion = $GLOBALS['conexion'];
    }

    public function listar() {
        $query = "SELECT * FROM det_venta";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($data) {
        $query = "INSERT INTO det_venta (id_venta, id_producto, cantidad, precio) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("iidi", $data['id_venta'], $data['id_producto'], $data['cantidad'], $data['precio']);
        return $stmt->execute();
    }

    public function actualizar($id, $data) {
        $query = "UPDATE det_venta SET id_venta = ?, id_producto = ?, cantidad = ?, precio = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("iidii", $data['id_venta'], $data['id_producto'], $data['cantidad'], $data['precio'], $id);
        return $stmt->execute();
    }
}
?>
