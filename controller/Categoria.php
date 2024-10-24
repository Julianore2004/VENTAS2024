<?php

require_once('../model/categoriaModel.php');
//instanciar la clase categoria model
$objCategoria = new CategoriaModel();

$tipo = $_REQUEST['tipo'];

if ($tipo == "listar") {
    //respuesta 
    $arr_Respuesta = array('status' => false, 'contenido' => '');
    $arr_Categorias = $objCategoria->obtener_categorias();
    print_r($arr_Categorias);
}

?>