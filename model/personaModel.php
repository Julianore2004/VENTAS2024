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
        $estado,

    ) {
        $sql = $this->conexion->query("CALL insertar_persona
        ('{$nro_identidad}','{$razon_social}','{$telefono}','{$correo}','{$departamento}',
        '{$provincia}','{$distrito}','{$codigo_postal}','{$direccion}','{$rol}','{$password}',
        '{$estado}')");

        if ($sql == false) {
            print_r(value: $this->conexion->error);
        }

        $sql = $sql->fetch_object();
        return $sql;
    
    }
}