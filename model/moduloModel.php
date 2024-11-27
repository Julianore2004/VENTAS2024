<?php

require_once "../library/conexion.php";

class ModuloModel {
    private $conexion;

    function __construct() {
        $this->conexion = (new Conexion())->connect();
    }

    public function registrarModulo($nombre, $descripcion, $idInventario) {
        $sql = "INSERT INTO modulo (nombre, descripcion, id_inventario) VALUES ('{$nombre}', '{$descripcion}', '{$idInventario}')";
        return $this->conexion->query($sql);
    }

    public function listarModulos() {
        $respuesta = $this->conexion->query("SELECT * FROM modulo");
        $modulos = [];
        while ($fila = $respuesta->fetch_object()) {
            $modulos[] = $fila;
        }
        return $modulos;
    }

    public function actualizarModulo($id, $nombre, $descripcion) {
        $sql = "UPDATE modulo SET nombre = '{$nombre}', descripcion = '{$descripcion}' WHERE id = '{$id}'";
        return $this->conexion->query($sql);
    }

    public function eliminarModulo($id) {
        $sql = "DELETE FROM modulo WHERE id = '{$id}'";
        return $this->conexion->query($sql);
    }
}
