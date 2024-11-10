<?php

require_once('../model/trabajadorModel.php');
// LISTAR TRABAJADORES EN COMPRAS
$objTrabajador = new PersonaModelTrabajador();

$tipo = $_REQUEST['tipo'];

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
$arr_Trabajadores = $objTrabajador->obtener_trabajadores();
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
