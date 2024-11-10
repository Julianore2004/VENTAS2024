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
        $fecha_compra,
        $trabajador
    ) {
        $sql = $this->conexion->query("CALL insertar_compra
        ('{$producto}','{$cantidad}','{$precio}','{$fecha_compra}','{$trabajador}')");

        if ($sql == false) {
            print_r(value: $this->conexion->error);
        }


        $sql = $sql->fetch_object();
        return $sql;
    }
}
