<?php

require_once "../library/conexion.php";

class CategoriasModel {
    private $conexion;

    function __construct() {
        $this->conexion = (new Conexion())->connect();
    }

    public function registrarCategoria($nombre, $descripcion) {
        $sql = "INSERT INTO categorias (nombre_categoria, descripcion_categoria, date_added) VALUES ('{$nombre}', '{$descripcion}', NOW())";
        return $this->conexion->query($sql);
    }

    public function listarCategorias() {
        $respuesta = $this->conexion->query("SELECT * FROM categorias");
        $categorias = [];
        while ($fila = $respuesta->fetch_object()) {
            $categorias[] = $fila;
        }
        return $categorias;
    }

    public function actualizarCategoria($id, $nombre, $descripcion) {
        $sql = "UPDATE categorias SET nombre_categoria = '{$nombre}', descripcion_categoria = '{$descripcion}' WHERE id_categoria = '{$id}'";
        return $this->conexion->query($sql);
    }

    public function eliminarCategoria($id) {
        $sql = "DELETE FROM categorias WHERE id_categoria = '{$id}'";
        return $this->conexion->query($sql);
    }
}
