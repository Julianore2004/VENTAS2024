<?php

require_once "./library/conexion.php";


class ProductoModel
{

    private $conexion;

    function __construct(){
        $this->conexion = new Conexion();
        $this->conexion =
         $this->conexion->connect();
    }
    public function registrarProducto(
        $codigo,
        $nombre,
        $detalle,
        $precio,
        $stock,
        $categoria,
        $img,
        $proveedor
    ) {
        $sql = $this->conexion->query("CALL insertproducto('{$codigo}','{$nombre}','{$detalle}','{$precio}','{$stock}','{$categoria}','{$img}','{$proveedor}')");

    }
}
