<?php

require_once(__DIR__ . '../../config/config.php');
class CategoriaModel {
    private $conexion;

    public function __construct() {
        $this->conexion = $GLOBALS['conexion'];
    }

    public function listar() {
        $query = "SELECT * FROM categoria";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($data) {
        $query = "INSERT INTO categoria (nombre, detalle) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ss", $data['nombre'], $data['detalle']);
        return $stmt->execute();
    }

    public function actualizar($id, $data) {
        $query = "UPDATE categoria SET nombre = ?, detalle = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ssi", $data['nombre'], $data['detalle'], $id);
        return $stmt->execute();
    }
}
?>
