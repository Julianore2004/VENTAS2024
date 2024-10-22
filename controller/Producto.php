<?php

require_once('./model/productomodel.php');
// instanciar la clase modeloProducto
$objproducto = new ProductoModel();

$tipo = $_REQUEST['tipo'];

if ($tipo == "registrar") {
   if ($_POST) {
      $codigo = $_POST['codigo'];
      $nombre = $_POST['nombre'];
      $detalle = $_POST['detalle'];
      $precio = $_POST['precio'];
      $stock = $_POST['stock'];
      $categoria = $_POST['categoria'];
      $img = $_POST['img'];
      $proveedor = $_POST['proveedor'];
      if (
         $codigo == '' || $nombre == '' || $detalle == '' || $precio == '' ||
         $stock == '' || $categoria == '' || $img == '' || $proveedor == ''
      ) {
         $arra_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
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
      }
   }
}

?>