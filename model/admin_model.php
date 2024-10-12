<?php
require_once '../config/config.php'; // Ajusta la ruta según sea necesario

class AdminModel {
    private $conexion;

    public function __construct() {
        global $conexion; // Utiliza la conexión global definida en config.php
        $this->conexion = $conexion;
    }

    // Método para obtener todos los registros de la tabla persona
    public function listarPersonas() {
        $sql = "SELECT * FROM persona";
        $resultado = $this->conexion->query($sql);

        $personas = [];
        while ($fila = $resultado->fetch_assoc()) {
            $personas[] = $fila;
        }

        return $personas;
    }
}
?>
