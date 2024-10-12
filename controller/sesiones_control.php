<?php
require_once '../model/sesiones_model.php'; // Ajusta la ruta según sea necesario

class SesionesControl {
    private $sesionesModel;

    public function __construct() {
        $this->sesionesModel = new SesionesModel();
    }

    public function listarSesiones() {
        return $this->sesionesModel->listarSesiones();
    }

    public function insertarSesion($id_usuario, $fecha_inicio, $fecha_fin) {
        return $this->sesionesModel->insertarSesion($id_usuario, $fecha_inicio, $fecha_fin);
    }

    public function actualizarSesion($id, $id_usuario, $fecha_inicio, $fecha_fin) {
        return $this->sesionesModel->actualizarSesion($id, $id_usuario, $fecha_inicio, $fecha_fin);
    }
}
?>
