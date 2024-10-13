<?php
require_once(__DIR__ . '../../config/config.php');
class PersonaModel {
    private $conexion;

    public function __construct() {
        $this->conexion = $GLOBALS['conexion'];
    }

    public function listar() {
        $query = "SELECT * FROM persona";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($data) {
        $query = "INSERT INTO persona (nombre, apellido, dni) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ssi", $data['nombre'], $data['apellido'], $data['dni']);
        return $stmt->execute();
    }

    public function actualizar($id, $data) {
        $query = "UPDATE persona SET nombre = ?, apellido = ?, dni = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ssii", $data['nombre'], $data['apellido'], $data['dni'], $id);
        return $stmt->execute();
    }
}
?>
