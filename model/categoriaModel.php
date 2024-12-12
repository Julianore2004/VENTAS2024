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
        $respuesta = $this->conexion->query("SELECT * FROM categoria");
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
            return $this->conexion->insert_id;
        } else {
            print_r($this->conexion->error);
            return false;
        }
    }

    public function obtener_categoria_por_id($id)
    {
        $respuesta = $this->conexion->query("SELECT nombre FROM categoria WHERE id = '{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }

    public function verCategorias($id)
    {
        $sql = $this->conexion->query("SELECT * FROM categoria WHERE id = '{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
     
    public function actualizarCategoria($id, $nombre, $detalle)
    {
        $sql = $this->conexion->query("CALL actualizarCategoria('{$id}', '{$nombre}', '{$detalle}')");

        if (!$sql) {
            die("Error en la consulta: " . $this->conexion->error);
        }

        return $sql;
    }
    public function categoriaTieneProductos($id)
    {
        $sql = $this->conexion->query("SELECT COUNT(*) as count FROM producto WHERE id_categoria = '{$id}'");
        $resultado = $sql->fetch_object();
        return $resultado->count > 0;
    }
    
    public function eliminarCategoria($id)
    {
        $sql = $this->conexion->query("CALL eliminar_categoria('{$id}')");

        if (!$sql) {
            die("Error en la consulta: " . $this->conexion->error);
        }

        return $sql;
    }
}
?>
