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
        $sql = $this->conexion->query("CALL insertar_compra
        ('{$producto}','{$cantidad}','{$precio}','{$trabajador}')");

        if ($sql == false) {
            print_r(value: $this->conexion->error);
        }


        $sql = $sql->fetch_object();
        return $sql;
    }
    public function obtener_compras()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT id, id_producto, id_trabajador, cantidad, precio, fecha_compra 
FROM compras;");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    
}
