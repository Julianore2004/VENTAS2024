<?php

require_once "../library/conexion.php";

class EstudiantesModel {
    private $conexion;

    function __construct() {
        $this->conexion = (new Conexion())->connect();
    }

    public function registrarEstudiante($nombre, $programa, $semestre) {
        $sql = "INSERT INTO estudiantes (nombrecompleto, programa_de_estudios, semestre) VALUES ('{$nombre}', '{$programa}', '{$semestre}')";
        return $this->conexion->query($sql);
    }

    public function listarEstudiantes() {
        $respuesta = $this->conexion->query("SELECT * FROM estudiantes");
        $estudiantes = [];
        while ($fila = $respuesta->fetch_object()) {
            $estudiantes[] = $fila;
        }
        return $estudiantes;
    }

    public function actualizarEstudiante($id, $nombre, $programa, $semestre) {
        $sql = "UPDATE estudiantes SET nombrecompleto = '{$nombre}', programa_de_estudios = '{$programa}', semestre = '{$semestre}' WHERE id = '{$id}'";
        return $this->conexion->query($sql);
    }

    public function eliminarEstudiante($id) {
        $sql = "DELETE FROM estudiantes WHERE id = '{$id}'";
        return $this->conexion->query($sql);
    }
}
