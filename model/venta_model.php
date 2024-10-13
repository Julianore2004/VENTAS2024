<?php
require_once(__DIR__ . '../../config/config.php');
class VentaModel {
    private $conexion;

    public function __construct() {
        $this->conexion = $GLOBALS['conexion'];
    }

    public function listar() {
        $query = "SELECT * FROM venta";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($data) {
        $query = "INSERT INTO venta (id_persona, total, fecha) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ids", $data['id_persona'], $data['total'], $data['fecha']);
        return $stmt->execute();
    }

    public function actualizar($id, $data) {
        $query = "UPDATE venta SET id_persona = ?, total = ?, fecha = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("isdi", $data['id_persona'], $data['total'], $data['fecha'], $id);
        return $stmt->execute();
    }
}
?>
