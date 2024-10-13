<?php
require_once __DIR__ . '/../model/persona_model.php';

class PersonaControl {
    private $personaModel;

    public function __construct() {
        $this->personaModel = new PersonaModel();
    }

    public function listarPersonas() {
        return $this->personaModel->listar();
    }

    public function insertarPersona($data) {
        return $this->personaModel->insertar($data);
    }

    public function actualizarPersona($id, $data) {
        return $this->personaModel->actualizar($id, $data);
    }
  
        public function obtenerPersona($id) {
            return $this->personaModel->obtenerPersona($id);
        
}

    public function listarTrabajadores() {
        return $this->personaModel->listar();
    }
}

?>
