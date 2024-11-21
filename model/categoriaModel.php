<?php

require_once "../library/conexion.php";

class CategoriaModel
{
    private $conexion;
    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->connect();
    }
    public function obtener_categorias()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM categoria");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function registrarCategoria($nombre, $detalle)
    {
        $sql = "INSERT INTO categoria (nombre, detalle) VALUES ('{$nombre}', '{$detalle}')";

        $resultado = $this->conexion->query($sql);

        if ($resultado) {
            // Retorna el último ID insertado en caso de éxito
            return $this->conexion->insert_id;
        } else {
            // Imprime un error si ocurre algún problema
            print_r($this->conexion->error);
            return false;
        }
    }
    public function obtener_categoria_por_id($id)
    {
        $respuesta = $this->conexion->query("SELECT nombre FROM categoria 
        WHERE id = '{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
}
