<?php
require_once("../model/personaModel.php");

$objPersona = new PersonaModel();

$tipo = $_GET["tipo"];

if ($tipo == "iniciar_sesion") {
    // print_r($_POST);
    $usuario = trim($_POST["usuario"]);
    $password = trim($_POST["password"]);
    $ArrResponse = array('status' => false, 'message' => '');

    $arrPersona = $objPersona->buscarPersonaPorDNI($usuario);
    // print_r($arrPersona);
    if (empty($arrPersona)) {
        $ArrResponse = array('status' => false, 'message' => 'Error, 
        usuario no esta registrado en el sistema');
    } else {
        if (password_verify($password, $arrPersona->password)) {
            session_start();
            $_SESSION['sesion_ventas_id'] = $arrPersona->id;
            $_SESSION['sesion_ventas_nro_identidad'] = $arrPersona->nro_identidad;
            $_SESSION['sesion_ventas_nombres'] = $arrPersona->razon_social;

            $ArrResponse = array('status' => true, 'message' => 'Ingresar al sistema');
        } else {
            $ArrResponse = array('status' => false, 'message' => 'Contraseña incorrecta');
        }
    }
    echo json_encode($ArrResponse);
}
//cerrar sesion
if($tipo = 'cerrar_sesion') {
    session_start();
    session_unset();
    session_destroy();
   $ArrResponse = array('status'=> true) ;
   echo json_encode($ArrResponse);
}

?>
