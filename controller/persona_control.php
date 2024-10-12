<?php
require_once '../model/persona_model.php'; // Ajusta la ruta según sea necesario

class PersonaControl {
    private $personaModel;

    public function __construct() {
        $this->personaModel = new PersonaModel();
    }

    public function listarPersonas() {
        return $this->personaModel->listarPersonas();
    }

    public function insertarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password) {
        return $this->personaModel->insertarPersona($nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password);
    }

    public function actualizarPersona($id, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password) {
        return $this->personaModel->actualizarPersona($id, $nro_identidad, $razon_social, $telefono, $correo, $departamento, $provincia, $distrito, $codigo_postal, $direccion, $rol, $password);
    }
}
?>
