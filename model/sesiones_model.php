<?php
require_once '../config/config.php'; // Ajusta la ruta según sea necesario

class SesionesModel {
    private $conexion;

    public function __construct() {
        global $conexion; // Utiliza la conexión global definida en config.php
        $this->conexion = $conexion;
    }

    // Método para listar sesiones
    public function listarSesiones() {
        $sql = "SELECT * FROM sesiones";
        $resultado = $this->conexion->query($sql);

        $sesiones = [];
        while ($fila = $resultado->fetch_assoc()) {
            $sesiones[] = $fila;
        }

        return $sesiones;
    }

    // Método para insertar una sesión
    public function insertarSesion($id_usuario, $fecha_inicio, $fecha_fin) {
        $sql = "INSERT INTO sesiones (id_usuario, fecha_inicio, fecha_fin) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("iss", $id_usuario, $fecha_inicio, $fecha_fin);
        return $stmt->execute();
    }

    // Método para actualizar una sesión
    public function actualizarSesion($id, $id_usuario, $fecha_inicio, $fecha_fin) {
        $sql = "UPDATE sesiones SET id_usuario = ?, fecha_inicio = ?, fecha_fin = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("issi", $id_usuario, $fecha_inicio, $fecha_fin, $id);
        return $stmt->execute();
    }
}
?>
