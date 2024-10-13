<?php


require_once __DIR__ . '/../model/categoria_model.php';

class CategoriaControl {
    private $categoriaModel;

    public function __construct() {
        $this->categoriaModel = new CategoriaModel();
    }

    public function listarCategorias() {
        return $this->categoriaModel->listar();
    }

    public function insertarCategoria($data) {
        return $this->categoriaModel->insertar($data);
    }

    public function actualizarCategoria($id, $data) {
        return $this->categoriaModel->actualizar($id, $data);
    }
}

?>
