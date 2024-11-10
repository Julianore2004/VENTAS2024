<?php

require_once('../model/comprasModel.php');
// instanciar la clase modeloProducto
$objproducto = new comprasModel();

$tipo = $_REQUEST['tipo'];

if ($tipo == "registrar") {

   if ($_POST) {
      $producto = $_POST['producto'];
      $cantidad = $_POST['cantidad'];
      $precio = $_POST['precio'];
      $fecha_compra = $_POST['fecha_compra'];
      $trabajador = $_POST['trabajador'];
      if (
         $producto == '' || $cantidad == '' || $precio == '' ||
         $fecha_compra == '' || $trabajador == '' ) {
         $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
      } else {
         $arrProducto = $objproducto->registrarCompras  (
            $producto,
            $cantidad,
            $precio,
            $fecha_compra,
            $trabajador
         );

         if ($arrProducto->id > 0) {
            $arr_Respuesta = array(
               'status' => true,
               'mensaje' => 'Registro Exitoso'
            );
          
         }
         else {
            $arr_Respuesta = array(
               'status' => false,
               'mensaje' => 'Error, intentelo de nuevo'
            );
         }
         echo json_encode($arr_Respuesta);
      }
   }

}