<?php

require_once "../library/conexion.php";

class comprasModel
{

    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion =
            $this->conexion->connect();
    }
    public function registrarCompras(
        $producto,
        $cantidad,
        $precio,
        $trabajador
    ) {
        $sql = "INSERT INTO compras (id_producto, cantidad, precio, id_trabajador) VALUES ('{$producto}','{$cantidad}','{$precio}','{$trabajador}')";
       
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
    
    public function obtener_compras()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM compras");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
            
        }
        return $arrRespuesta;
    }

    
    public function verCompras($id){
        $sql = $this->conexion->query("SELECT * FROM compras WHERE id = '{$id}'");
        $sql = $sql->fetch_object();
        return $sql;
    }
    public function actualizarCompra($id, $producto, $cantidad, $precio, $trabajador)
    {
        $sql = $this->conexion->query("CALL actualizarCompra('{$id}', '{$producto}', '{$cantidad}', '{$precio}', '{$trabajador}')");
    
        if (!$sql) {
            die("Error en la consulta: " . $this->conexion->error);
        }
    
        return $sql;
    }
    

}
