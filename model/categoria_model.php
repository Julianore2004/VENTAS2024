<?php

require_once '../config/config.php'; // Asegúrate de ajustar la ruta según la ubicación del archivo

class CategoriaModel {
    private $conexion;

    public function __construct() {
        global $conexion; // Utiliza la conexión global definida en config.php
        $this->conexion = $conexion;
    }

    // Método para listar categorías
    public function listarCategorias() {
        $sql = "SELECT * FROM categoria";
        $resultado = $this->conexion->query($sql);

        $categorias = [];
        while ($fila = $resultado->fetch_assoc()) {
            $categorias[] = $fila;
        }

        return $categorias;
    }

    // Método para insertar una nueva categoría
    public function insertarCategoria($nombre, $detalle) {
        $sql = "INSERT INTO categoria (nombre, detalle) VALUES (?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ss", $nombre, $detalle);
        return $stmt->execute();
    }

    // Método para actualizar una categoría
    public function actualizarCategoria($id, $nombre, $detalle) {
        $sql = "UPDATE categoria SET nombre = ?, detalle = ? WHERE id = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("ssi", $nombre, $detalle, $id);
        return $stmt->execute();
    }
}
?>

