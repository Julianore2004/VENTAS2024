<?php

require_once('../model/comprasModel.php');
require_once('../model/productomodel.php');
require_once('../model/personaModel.php');

$objproducto = new ProductoModel();
$objPersona = new PersonaModel();
$objCompra = new comprasModel();

$tipo = $_REQUEST['tipo'];


if ($tipo == "listar_compras") {
   //respuesta 
   $arr_Respuesta = array('status' => false, 'contenido' => '');
   $arr_Compras = $objCompra->obtener_compras();
   if (!empty($arr_Compras)) {

      for ($i = 0; $i < count($arr_Compras); $i++) {

         // Obtener producto
         $id_producto = $arr_Compras[$i]->id_producto;
         $r_producto = $objproducto->obtener_producto_por_id($id_producto);
         $arr_Compras[$i]->producto = $r_producto;

         // Obtener trabajador
         $id_trabajador = $arr_Compras[$i]->id_trabajador;
         $r_trabajador = $objPersona->obtener_trabajador_por_id($id_trabajador);
         $arr_Compras[$i]->trabajador = $r_trabajador;

         $id_Compras = $arr_Compras[$i]->id;

         $opciones = '<a href="' . BASE_URL . 'editar-compra/' . $id_Compras . '" class="btn btn-success"><i class="fa fa-pencil"> </i> </a>
         <a href="" class="btn btn-danger"><i class="fa fa-trash"> <button onclick="eliminar-producto(' . $id_Compras . ');" class="fa fa-trash> </button></i> </a>';

         $arr_Compras[$i]->options = $opciones;
      }
      $arr_Respuesta['status'] = true;
      $arr_Respuesta['contenido'] = $arr_Compras;
   }

   echo json_encode($arr_Respuesta);
}

if ($tipo == "registrar_compras") {

   if ($_POST) {
      $producto = $_POST['producto'];
      $cantidad = $_POST['cantidad'];
      $precio = $_POST['precio'];
      $trabajador = $_POST['trabajador'];
      if (
         $producto == '' || $cantidad == '' ||
         $precio == '' || $trabajador == ''
      ) {
         $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
      } else {
         $arr_Compras = $objCompra->registrarCompras(
            $producto,
            $cantidad,
            $precio,
            $trabajador
         );
         if ($arr_Compras) {
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
if ($tipo == "ver_compras"){
   /*  print_r($_POST); */
    $id_Compras = $_POST['id_compra'];
    $arr_Respuesta = $objCompra->verCompras($id_Compras);
    /* print_r($arr_Respuesta); */
    if (empty($arr_Respuesta)) {
      $response = array('status' => false, 'mensaje' => 'Error, no hay informaion');
    }else {
      $response = array('status' => true, 'mensaje' => 'Datos encontrados', 'contenido' => $arr_Respuesta);
    }
    echo json_encode($response);
    
}
