<?php

require_once "../library/conexion.php";

class InventarioModel {
    private $conexion;

    function __construct() {
        $this->conexion = (new Conexion())->connect();
    }

    public function registrarInventario($codigo, $denominacion, $marca, $modelo, $tipo, $color, $serie, $dimensiones, $valor, $situacion, $estado, $observaciones, $imagen, $idEstudiante, $idCategoria) {
        $sql = "INSERT INTO inventario (codigo_patrimonial, denominacion, marca, modelo, tipo, color, serie, dimensiones, valor, situacion, estado_de_observacion, observaciones, imagen, id_estudiante, id_categoria) VALUES 
        ('{$codigo}', '{$denominacion}', '{$marca}', '{$modelo}', '{$tipo}', '{$color}', '{$serie}', '{$dimensiones}', '{$valor}', '{$situacion}', '{$estado}', '{$observaciones}', '{$imagen}', '{$idEstudiante}', '{$idCategoria}')";
        return $this->conexion->query($sql);
    }

    public function listarInventario() {
        $respuesta = $this->conexion->query("SELECT * FROM inventario");
        $inventarios = [];
        while ($fila = $respuesta->fetch_object()) {
            $inventarios[] = $fila;
        }
        return $inventarios;
    }

    public function actualizarInventario($id, $data) {
        extract($data);
        $sql = "UPDATE inventario SET codigo_patrimonial = '{$codigo}', denominacion = '{$denominacion}', marca = '{$marca}', modelo = '{$modelo}', tipo = '{$tipo}', color = '{$color}', serie = '{$serie}', dimensiones = '{$dimensiones}', valor = '{$valor}', situacion = '{$situacion}', estado_de_observacion = '{$estado}', observaciones = '{$observaciones}', imagen = '{$imagen}', id_estudiante = '{$idEstudiante}', id_categoria = '{$idCategoria}' WHERE id = '{$id}'";
        return $this->conexion->query($sql);
    }

    public function eliminarInventario($id) {
        $sql = "DELETE FROM inventario WHERE id = '{$id}'";
        return $this->conexion->query($sql);
    }
}
