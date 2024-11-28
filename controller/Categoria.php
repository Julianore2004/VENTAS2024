<?php

require_once('../model/categoriaModel.php');
//instanciar la clase categoria model
$objCategoria = new CategoriaModel();

$tipo = $_REQUEST['tipo'];

// Instanciar la clase CategoriaModel

$tipo = $_REQUEST['tipo'];


if ($tipo == "listar") {
    //respuesta 
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Categorias = $objCategoria->obtener_categorias();
    if (!empty($arr_Categorias)) {
        // recorremos el array para agregar las ociones de la categoria
        for ($i = 0; $i < count($arr_Categorias); $i++) {
            $id_categoria = $arr_Categorias[$i]->id;
            $nombre = $arr_Categorias[$i]->nombre;
            
         $opciones = '<a href="#" class="btn btn-success"><i class="fa fa-pencil"></i> </a>
         <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> </a>';
             $arr_Categorias[$i]->options = $opciones;
        }
        $arr_Respuesta['status'] = true;
        $arr_Respuesta['contenido'] = $arr_Categorias;

    }

    echo json_encode($arr_Respuesta);
}

if ($tipo == "registrar_categoria") {
    if ($_POST) {
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];

        if ($nombre == '' || $detalle == '') {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            $arrCategoria = $objCategoria->registrarCategoria($nombre, $detalle);

            if ($arrCategoria) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, inténtelo de nuevo');
            }
            echo json_encode($arr_Respuesta);
        }
    }
}

?>
