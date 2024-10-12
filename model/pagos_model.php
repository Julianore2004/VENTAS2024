<?php
require_once '../config/config.php'; // Ajusta la ruta según sea necesario

class PagosModel {
    private $conexion;

    public function __construct() {
        global $conexion; // Utiliza la conexión global definida en config.php
        $this->conexion = $conexion;
    }

    // Método para listar pagos
    public function listarPagos() {
        $sql = "SELECT * FROM pagos";
        $resultado = $this->conexion->query($sql);

        $pagos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $pagos[] = $fila;
        }

        return $pagos;
    }

    // Método para insertar un pago
    public function insertarPago($id_venta, $monto, $metodo_pago, $estado) {
        $sql = "INSERT INTO pagos (id_venta, monto, metodo_pago, estado) VALUES (?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("idii", $id_venta, $monto, $metodo_pago, $estado);
        return $stmt->execute();
    }

    // Método para actualizar un pago
    public function actualizarPago($id, $id_venta, $monto, $metodo_pago, $estado) {
        $sql = "UPDATE pagos SET id_venta = ?, monto = ?, metodo_pago = ?, estado = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("idiii", $id_venta, $monto, $metodo_pago, $estado, $id);
        return $stmt->execute();
    }
}
?>
