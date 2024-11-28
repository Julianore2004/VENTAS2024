<?php

require_once "../library/conexion.php";
class PersonaModel
{

    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion =
            $this->conexion->connect();
    }
    public function registrarPersona(
        $nro_identidad,
        $razon_social,
        $telefono,
        $correo,
        $departamento,
        $provincia,
        $distrito,
        $codigo_postal,
        $direccion,
        $rol,

    ) {
        $sql = "INSERT INTO persona (nro_identidad, razon_social, telefono, correo, departamento, provincia, distrito, codigo_postal, direccion, rol) 
        VALUES ('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}',
        '{$provincia}','{$distrito}','{$codigo_postal}','{$direccion}','{$rol}')";

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
    public function buscarPersonaPorDNI($nro_identidad)
    {
        $sql = $this->conexion->query("SELECT * FROM persona WHERE nro_identidad = '{$nro_identidad}'");
        $sql = $sql->fetch_object();
        return $sql;
    }

    public function obtener_personas()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query(" SELECT * FROM persona");
        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function obtener_trabajadores()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'trabajador'");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }
    public function obtener_proveedores()
    {
        $arrRespuesta = array();
        $respuesta = $this->conexion->query("SELECT * FROM persona WHERE rol = 'proveedor'");

        while ($objeto = $respuesta->fetch_object()) {
            array_push($arrRespuesta, $objeto);
        }
        return $arrRespuesta;
    }

    public function obtener_proveedor_por_id($id)
    {
        $respuesta = $this->conexion->query("SELECT razon_social FROM persona WHERE id = '{$id}'");
        $objeto = $respuesta->fetch_object();
        return $objeto;
    }
    public function obtener_trabajador_por_id($id)
    {
        $respuesta = $this->conexion->query("SELECT razon_social FROM persona WHERE id = '{$id}'");
        return $respuesta->fetch_object();
    }
}
