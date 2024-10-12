<?php
require_once '../config/config.php'; // Ajusta la ruta según sea necesario

class PersonaModel {
    private $conexion;

    public function __construct() {
        global $conexion; // Utiliza la conexión global definida en config.php
        $this->conexion = $conexion;
    }

    // Método para listar personas
    public function listarPersonas() {
        $sql = "SELECT * FROM persona";
        $resultado = $this->conexion->query($sql);

        $personas = [];
        while ($fila = $resultado->fetch_assoc()) {
            $personas[] = $fila;
        }

        return $personas;
    }

    // Método para insertar una persona
    public function insertarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password) {
        $sql = "INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, codigo_postal, direccion, rol, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("sssssssssss", $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password);
        return $stmt->execute();
    }

    // Método para actualizar una persona
    public function actualizarPersona($id, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password) {
        $sql = "UPDATE persona SET nro_identidad = ?, razon_social = ?, telefono = ?, correo = ?, departamento = ?, provincia = ?, distrito = ?, codigo_postal = ?, direccion = ?, rol = ?, password = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("sssssssssssi", $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password, $id);
        return $stmt->execute();
    }
}
?>
