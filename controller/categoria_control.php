<?php
require_once '../model/categoria_model.php'; // Asegúrate de ajustar la ruta según la ubicación del archivo

class CategoriaControl {
    private $categoriaModel;

    public function __construct() {
        $this->categoriaModel = new CategoriaModel();
    }

    // Método para listar todas las categorías
    public function listarCategorias() {
        return $this->categoriaModel->listarCategorias();
    }

    // Método para insertar una nueva categoría
    public function insertarCategoria($nombre, $detalle) {
        if (empty($nombre) || empty($detalle)) {
            return ['success' => false, 'message' => 'El nombre y el detalle son obligatorios.'];
        }

        $resultado = $this->categoriaModel->insertarCategoria($nombre, $detalle);
        if ($resultado) {
            return ['success' => true, 'message' => 'Categoría insertada correctamente.'];
        } else {
            return ['success' => false, 'message' => 'Error al insertar la categoría.'];
        }
    }

    // Método para actualizar una categoría
    public function actualizarCategoria($id, $nombre, $detalle) {
        if (empty($nombre) || empty($detalle)) {
            return ['success' => false, 'message' => 'El nombre y el detalle son obligatorios.'];
        }

        $resultado = $this->categoriaModel->actualizarCategoria($id, $nombre, $detalle);
        if ($resultado) {
            return ['success' => true, 'message' => 'Categoría actualizada correctamente.'];
        } else {
            return ['success' => false, 'message' => 'Error al actualizar la categoría.'];
        }
    }
}
?>
