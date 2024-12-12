<?php

require_once "../library/conexion.php";

class ProductoModel
{

    private $conexion;

    function __construct()
    {
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
        $proveedor,
        $tipoArchivo
    ) {
        // Ejecutar la consulta
        $sql = $this->conexion->query("CALL insertProducto(
        '{$codigo}', '{$nombre}', '{$detalle}', '{$precio}', '{$stock}', 
        '{$categoria}', '{$img}', '{$proveedor}', '{$tipoArchivo}')");

        // Validar si la consulta fue exitosa
        if (!$sql) {
            // Imprimir el error de MySQL para depuración
            die("Error en la consulta: " . $this->conexion->error);
        }

        // Retornar los resultados si la consulta es válida
        return $sql->fetch_object();
    }


  
    public function actualizar_imagen($id, $img) {
        $sql = $this->conexion->query("UPDATE producto SET img='{$img}' WHERE id='{$id}'");
        return $sql;
    }
    

    public function obtener_productos()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM producto");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function obtener_producto_por_id($id)
    {
        $respuesta = $this->conexion->query("SELECT nombre FROM producto WHERE id = '{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }

    public function verProductos($id) {
        $sql = $this->conexion->query("SELECT * FROM producto WHERE id = '{$id}'");
        return $sql->fetch_object();
    }
    

    //editar producto
    public function editarProducto(
        $id,
        $codigo,
        $nombre,
        $detalle,
        $precio,
        $categoria,
        $img,
        $proveedor
    ) {
        $sql = $this->conexion->query("CALL actualizarProducto(
            '{$id}', '{$codigo}', '{$nombre}', '{$detalle}', '{$precio}',
            '{$categoria}', '{$img}', '{$proveedor}')");
    
        // Validar si la consulta fue exitosa
        if (!$sql) {
            // Imprimir el error de MySQL para depuración
            die("Error en la consulta: " . $this->conexion->error);
        }
    
        // Retornar los resultados si la consulta es válida
        return $sql;
    }
    
    public function productoTieneCompras($id)
{
    $sql = $this->conexion->query("SELECT COUNT(*) as count FROM compras WHERE id_producto = '{$id}'");
    $resultado = $sql->fetch_object();
    return $resultado->count > 0;
}

    public function eliminarProducto($id)
    {
        $sql = $this->conexion->query("CALL eliminarproducto('{$id}')");

        if (!$sql) {
            die("Error en la consulta: " . $this->conexion->error);
        }

        return $sql;
    }
    
}
