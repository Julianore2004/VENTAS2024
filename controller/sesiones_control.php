<?php
require_once __DIR__ . '/../model/sesiones_model.php';

class SesionesControl {
    private $sesionesModel;

    public function __construct() {
        $this->sesionesModel = new SesionesModel();
    }

    public function listarSesiones() {
        return $this->sesionesModel->listar();
    }

    public function insertarSesion($data) {
        return $this->sesionesModel->insertar($data);
    }

    public function actualizarSesion($id, $data) {
        return $this->sesionesModel->actualizar($id, $data);
    }
}
?>
