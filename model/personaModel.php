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
        $password,


    ) {
        $sql = $this->conexion->query("CALL insertar_persona
        ('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}',
        '{$provincia}','{$distrito}','{$codigo_postal}','{$direccion}','{$rol}','{$password}')");

        if ($sql == false) {
            print_r(value: $this->conexion->error);
        }

        $sql = $sql->fetch_object();
        return $sql;
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
