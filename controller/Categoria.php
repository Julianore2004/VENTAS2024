<?php
require_once('../model/categoriaModel.php');
//instanciar la clase categoria model
$objCategoria = new CategoriaModel();

$tipo = $_REQUEST['tipo'];

if ($tipo == "listar") {
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Categorias = $objCategoria->obtener_categorias();
    if (!empty($arr_Categorias)) {
        for ($i = 0; $i < count($arr_Categorias); $i++) {
            $id_categoria = $arr_Categorias[$i]->id;
            $nombre = $arr_Categorias[$i]->nombre;

            $opciones = '<a href="' . BASE_URL . 'editar-categoria/' . $id_categoria . '" class="btn btn-success"><i class="fa fa-pencil"> </i> </a>
         <button onclick="eliminar_categoria(' . $id_categoria . ');" class="btn btn-danger value="sss"><i class="fa fa-trash"></i></button>';

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

if ($tipo == "ver_categorias") {
    $id_categoria = $_POST['id_categoria'];
    $arr_Respuesta = $objCategoria->verCategorias($id_categoria);
    if (empty($arr_Respuesta)) {
        $response = array('status' => false, 'mensaje' => 'Error, no hay información');
    } else {
        $response = array('status' => true, 'mensaje' => 'Datos encontrados', 'contenido' => $arr_Respuesta);
    }
    echo json_encode($response);
}

if ($tipo == "actualizar_categoria") {
    if ($_POST) {
        $id_categoria = $_POST['id_categoria'];
        $nombre = $_POST['nombre'];
        $detalle = $_POST['detalle'];

        if ($nombre == '' || $detalle == '') {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacíos');
        } else {
            $arrCategoria = $objCategoria->actualizarCategoria($id_categoria, $nombre, $detalle);
            if ($arrCategoria) {
                $arr_Respuesta = array('status' => true, 'mensaje' => 'Actualización Exitosa');
            } else {
                $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, inténtelo de nuevo');
            }
        }
        echo json_encode($arr_Respuesta);
    }
}

if ($tipo == "eliminar_categoria") {
    if ($_POST) {
        $id_categoria = $_POST['id_categoria'];
        $arrCategoria = $objCategoria->eliminarCategoria($id_categoria);

        if ($arrCategoria) {
            $arr_Respuesta = array('status' => true, 'mensaje' => 'Eliminación Exitosa');
        } else {
            $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, inténtelo de nuevo');
        }
        echo json_encode($arr_Respuesta);
    }
}
?>
