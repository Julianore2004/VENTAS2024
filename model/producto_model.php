<?php
require_once(__DIR__ . '../../config/config.php');
class ProductoModel {
    private $conexion;

    public function __construct() {
        $this->conexion = $GLOBALS['conexion'];
    }

    public function listar() {
        $query = "SELECT * FROM producto";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($data) {
        $query = "INSERT INTO producto (nombre, precio, stock, id_categoria) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("sdii", $data['nombre'], $data['precio'], $data['stock'], $data['id_categoria']);
        return $stmt->execute();
    }

    public function actualizar($id, $data) {
        $query = "UPDATE producto SET nombre = ?, precio = ?, stock = ?, id_categoria = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("sdiii", $data['nombre'], $data['precio'], $data['stock'], $data['id_categoria'], $id);
        return $stmt->execute();
    }
}
?>
