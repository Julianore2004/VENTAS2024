<?php
require_once './config/config.php';

class AdminModel {
    private $conexion;

    public function __construct() {
        $this->conexion = $GLOBALS['conexion'];
    }

    public function listar() {
        $query = "SELECT * FROM admin";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($data) {
        $query = "INSERT INTO admin (nombre, email) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ss", $data['nombre'], $data['email']);
        return $stmt->execute();
    }

    public function actualizar($id, $data) {
        $query = "UPDATE admin SET nombre = ?, email = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ssi", $data['nombre'], $data['email'], $id);
        return $stmt->execute();
    }
}
?>
