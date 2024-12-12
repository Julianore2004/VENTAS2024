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

    
    public function verCompras($id) {
        $sql = $this->conexion->query("SELECT * FROM compras WHERE id = '{$id}'");
        return $sql->fetch_object();
    }
    
    public function actualizarCompra($id, $producto, $cantidad, $precio, $trabajador, $estado)
    {
        $sql = $this->conexion->query("UPDATE compras SET id_producto = '{$producto}', cantidad = '{$cantidad}', precio = '{$precio}', id_trabajador = '{$trabajador}', estado = '{$estado}' WHERE id = '{$id}'");
    
        if (!$sql) {
            die("Error en la consulta: " . $this->conexion->error);
        }
    
        return $sql;
    }
    public function toggleEstado($id, $nuevo_estado)
{
    $sql = $this->conexion->query("UPDATE compras SET estado = '{$nuevo_estado}' WHERE id = '{$id}'");

    if (!$sql) {
        die("Error en la consulta: " . $this->conexion->error);
    }

    return $sql;
}
public function habilitarCompra($id)
{
    $sql = $this->conexion->query("UPDATE compras SET estado = 1 WHERE id = '{$id}'");

    if (!$sql) {
        die("Error en la consulta: " . $this->conexion->error);
    }

    return $sql;
}

public function deshabilitarCompra($id)
{
    $sql = $this->conexion->query("UPDATE compras SET estado = 2 WHERE id = '{$id}'");

    if (!$sql) {
        die("Error en la consulta: " . $this->conexion->error);
    }

    return $sql;
}


}
