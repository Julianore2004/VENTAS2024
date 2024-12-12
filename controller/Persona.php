<?php
require_once('../model/personaModel.php');
// instanciar la clase modeloProducto
$objPersona = new PersonaModel();
$tipo = $_REQUEST['tipo'];

// listar Personas
if ($tipo == "listar_persona") {
    //respuesta
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Persona = $objPersona->obtener_personas();
    if (!empty($arr_Persona)) {
        for ($i = 0; $i < count($arr_Persona); $i++) {
            $id_Persona = $arr_Persona[$i]->id;
            $razon_social = $arr_Persona[$i]->razon_social;

            $opciones = '<a href="' . BASE_URL . 'editar-persona/' . $id_Persona . '" class="btn btn-success"><i class="fa fa-pencil"> </i> </a>
            <button onclick="eliminar_persona(' . $id_Persona . ');" class="btn btn-danger"><i class="fa fa-trash"></i></button>';

            $arr_Persona[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Persona;
    }

    echo json_encode($arr_Respuesta);
}

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
        $secure_password  = password_hash($nro_identidad, PASSWORD_DEFAULT);

        if (
            $nro_identidad == "" || $razon_social == "" || $telefono == "" ||
            $correo == "" || $departamento == "" || $provincia == "" ||
            $distrito == "" || $codigo_postal == "" || $razon_social == "" || $direccion == "" ||
            $rol == "" || $secure_password  == ""
        ) {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
        } else {
            $arrProducto = $objPersona->registrarPersona(
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
                $secure_password,
            );

            if ($arrProducto) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Registro Exitoso'
                );
            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error, intentelo de nuevo'
                );
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

if ($tipo == "listar_trabajadores") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Trabajadores = $objPersona->obtener_trabajadores();
    if (!empty($arr_Trabajadores)) {
        for ($i = 0; $i < count($arr_Trabajadores); $i++) {
            $id_Trabajadores = $arr_Trabajadores[$i]->id;
            $razon_social = $arr_Trabajadores[$i]->razon_social;
            $opciones = '<a href="" class="btn btn-success"><i class="fa fa-pencil"> Editar</i></a>
                     <a href="" class="btn btn-danger"><i class="fa fa-trash"> Eliminar</i></a>';
            $arr_Trabajadores[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Trabajadores;
    }
    echo json_encode($arr_Respuesta);
}

if ($tipo == "listar_proveedores") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Proveedores = $objPersona->obtener_proveedores();
    if (!empty($arr_Proveedores)) {
        for ($i = 0; $i < count($arr_Proveedores); $i++) {
            $id_Proveedores = $arr_Proveedores[$i]->id;
            $razon_social = $arr_Proveedores[$i]->razon_social;
            $opciones = '<a href="" class="btn btn-success"><i class="fa fa-pencil"> Editar</i></a>
                     <a href="" class="btn btn-danger"><i class="fa fa-trash"> Eliminar</i></a>';
            $arr_Proveedores[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Proveedores;
    }
    echo json_encode($arr_Respuesta);
}

if ($tipo == "ver_persona") {
    $id_Persona = $_POST['id_persona'];
    $arr_Respuesta = $objPersona->verPersonas($id_Persona);
    if (empty($arr_Respuesta)) {
        $response = array('status' => false, 'mensaje' => 'Error, no hay información');
    } else {
        $response = array('status' => true, 'mensaje' => 'Datos encontrados', 'contenido' => $arr_Respuesta);
    }
    echo json_encode($response);
}

if ($tipo == "actualizar_persona") {
    if ($_POST) {
        $id_persona = $_POST['id_persona'];
        $nro_identidad = $_POST['nro_identidad'];
        $razon_social = $_POST['razon_social'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $departamento = $_POST['departamento'];
        $provincia = $_POST['provincia'];
        $distrito = $_POST['distrito'];
        $codigo_postal = $_POST['codigo_postal'];
        $direccion = $_POST['direccion'];
        $rol = $_POST['rol'];

        if ($nro_identidad == "" || $razon_social == "" || $telefono == "" ||
            $correo == "" || $departamento == "" || $provincia == "" ||
            $distrito == "" || $codigo_postal == "" || $direccion == "" ||
            $rol == "") {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            $arrPersona = $objPersona->actualizarPersona(
                $id_persona,
                $nro_identidad,
                $razon_social,
                $telefono,
                $correo,
                $departamento,
                $provincia,
                $distrito,
                $codigo_postal,
                $direccion,
                $rol
            );
            if ($arrPersona) {
                $arr_Respuesta = array(
                    'status' => true,
                    'mensaje' => 'Actualización Exitosa'
                );
            } else {
                $arr_Respuesta = array(
                    'status' => false,
                    'mensaje' => 'Error, inténtelo de nuevo'
                );
            }
        }
        echo json_encode($arr_Respuesta);
    }
}

if ($tipo == "eliminar_persona") {
    if ($_POST) {
        $id_persona = $_POST['id_persona'];
        $arrPersona = $objPersona->eliminarPersona($id_persona);

        if ($arrPersona) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Eliminación Exitosa');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, inténtelo de nuevo');
        }
        echo json_encode($arr_Respuesta);
    }
}

?>
