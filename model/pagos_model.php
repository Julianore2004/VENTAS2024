<?php
require_once(__DIR__ . '../../config/config.php');
class PagosModel {
    private $conexion;

    public function __construct() {
        $this->conexion = $GLOBALS['conexion'];
    }

    public function listar() {
        $query = "SELECT * FROM pagos";
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertar($data) {
        $query = "INSERT INTO pagos (id_venta, monto, metodo) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ids", $data['id_venta'], $data['monto'], $data['metodo']);
        return $stmt->execute();
    }

    public function actualizar($id, $data) {
        $query = "UPDATE pagos SET id_venta = ?, monto = ?, metodo = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("idii", $data['id_venta'], $data['monto'], $data['metodo'], $id);
        return $stmt->execute();
    }
}
?>
