<?php

require_once('../model/personaModel.php');
// instanciar la clase modeloProducto
$objproducto = new PersonaModel();


$tipo = $_REQUEST['tipo'];

if ($tipo == "registrar") {
    if ($_POST) {
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $codigo_postal = $_POST['codigo_postal'];
        $razon_social = $_POST['razon_social'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];
        //cifrar contraseña
        $password =  password_hash($_POST['nro_identidad'],PASSWORD_DEFAULT);
       
        
        if (
            $nro_identidad == "" || $razon_social == "" || $telefono == "" ||
            $correo == "" || $departamento == "" || $provincia == "" ||
            $distrito == "" || $codigo_postal == "" || $razon_social == "" || $direccion == "" ||
            $rol == "" || $password == "" 
        ) {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
        } else {
            $arrProducto = $objproducto->registrarPersona(
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
             
              
            );

            if ($arrProducto->id > 0) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Registro Exitoso'
                );
            }else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error, intentelo de nuevo'
                );
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

