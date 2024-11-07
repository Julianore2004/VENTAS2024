<?php

require_once('../model/productomodel.php');
// instanciar la clase modeloProducto
$objproducto = new ProductoModel();

$tipo = $_REQUEST['tipo'];

if ($tipo == "registrar") {
   //  print_r($_POST);
   //       echo $_FILES["imagen"]["name"];



   if ($_POST) {
      $codigo = $_POST['codigo'];
      $nombre = $_POST['nombre'];
      $detalle = $_POST['detalle'];
      $precio = $_POST['precio'];
      $stock = $_POST['stock'];
      $categoria = $_POST['categoria'];
      $img = 'imagen';
      $proveedor = $_POST['proveedor'];
      if (
         $codigo == '' || $nombre == '' || $detalle == '' || $precio == '' ||
         $stock == '' || $categoria == '' || $img == '' || $proveedor == ''
      ) {
         $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
      } else {
         $arrProducto = $objproducto->registrarProducto(
            $codigo,
            $nombre,
            $detalle,
            $precio,
            $stock,
            $categoria,
            $img,
            $proveedor
         );

         if ($arrProducto->id > 0) {
            $arr_Respuesta = array(
               'status' => true,
               'mensaje' => 'Registro Exitoso'
            );
            // cargar archivo
            $archivo = $_FILES["imagen"]["tmp_name"];

            $destino = './assets/img_productos/';
            $tipoArchivo = strtolower(pathinfo(
               $_FILES['imagen']['name'],
               PATHINFO_EXTENSION
            ));
            $nombre = $arrProducto->id.".".$tipoArchivo;
            if (move_uploaded_file($archivo, $destino.$nombre)) {
               $arr_imagen = $objproducto->actualizar_imagen($id, $nombre);
            

         } else {
            $arr_Respuesta = array(
               'status' => true,
               'mensaje' => 'Registro extitoso');
       }
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
