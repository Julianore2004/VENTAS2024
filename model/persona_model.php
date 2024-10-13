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
    public function listarT() {
        $query = "SELECT * FROM persona WHERE rol = 'trabajador'"; // Filtrar por rol de trabajador
        $result = $this->conexion->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function insertar($data) {
        $query = "INSERT INTO persona (nombre, apellido, dni) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("ssi", $data['nombre'], $data['apellido'], $data['dni']);
        return $stmt->execute();
    }


    public function obtenerPersona($id) {
        $query = "SELECT * FROM persona WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    
    public function actualizar($id, $data) {
        $query = "UPDATE persona SET 
                    nro_identidad = ?, 
                    razon_social = ?, 
                    telefono = ?, 
                    correo = ?, 
                    departamento = ?, 
                    provincia = ?, 
                    distrito = ?, 
                    codigo_postal = ?, 
                    direccion = ?, 
                    rol = ?, 
                    estado = ? 
                  WHERE id = ?";
        $stmt = $this->conexion->prepare($query);
        $stmt->bind_param(
            "sssssssssssi", 
            $data['nro_identidad'], 
            $data['razon_social'], 
            $data['telefono'], 
            $data['correo'], 
            $data['departamento'], 
            $data['provincia'], 
            $data['distrito'], 
            $data['codigo_postal'], 
            $data['direccion'], 
            $data['rol'], 
            $data['estado'], 
            $id
        );
        return $stmt->execute();
    }

   
}
?>
