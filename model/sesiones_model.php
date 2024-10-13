<?php
require_once(__DIR__ . '../../config/config.php');
class SesionesModel {
    private $conexion;

    public function __construct() {
        $this->conexion = $GLOBALS['conexion'];
    }

    public function listar() {
        $query = "SELECT * FROM sesiones";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($data) {
        $query = "INSERT INTO sesiones (id_usuario, fecha_inicio, fecha_fin) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("iss", $data['id_usuario'], $data['fecha_inicio'], $data['fecha_fin']);
        return $stmt->execute();
    }

    public function actualizar($id, $data) {
        $query = "UPDATE sesiones SET id_usuario = ?, fecha_inicio = ?, fecha_fin = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("issi", $data['id_usuario'], $data['fecha_inicio'], $data['fecha_fin'], $id);
        return $stmt->execute();
    }
}
?>
