<?php

require_once('../model/productomodel.php');
require_once('../model/personaModel.php');
require_once('../model/categoriaModel.php');
// instanciar la clase modeloProducto
$objproducto = new ProductoModel();
$objCategoria = new CategoriaModel();
$objPersona = new PersonaModel();

$tipo = $_REQUEST['tipo'];

// listar productos
if ($tipo == "listar") {
   //respuesta 
   $arr_Respuesta = array('status' => false, 'contenido' => '');
   $arr_Producto = $objproducto->obtener_productos();
   if (!empty($arr_Producto)) {

      for ($i = 0; $i < count($arr_Producto); $i++) {

         $id_categoria = $arr_Producto[$i]->id_categoria;
         $r_categoria = $objCategoria->obtener_categoria_por_id($id_categoria);
         $arr_Producto[$i]->categoria = $r_categoria;

         $id_proveedor = $arr_Producto[$i]->id_proveedor;
         $r_proveedor = $objPersona->obtener_proveedor_por_id($id_proveedor);
         $arr_Producto[$i]->proveedor = $r_proveedor;

         $id_Producto = $arr_Producto[$i]->id;
         $nombre = $arr_Producto[$i]->nombre;

         $opciones = '<a href="#" class="btn btn-success"><i class="fa fa-pencil"></i> </a>
                     <a href="#" class="btn btn-danger"><i class="fa fa-trash"></i> </a>';
         $arr_Producto[$i]->options = $opciones;
      }
      $arr_Respuesta['status'] = true;
      $arr_Respuesta['contenido'] = $arr_Producto;
   }

   echo json_encode($arr_Respuesta);
}

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
      $img = 'img';
      $proveedor = $_POST['proveedor'];

      if (
         $codigo == '' || $nombre == '' || $detalle == '' || $precio == '' ||
         $stock == '' || $categoria == '' || $img == '' || $proveedor == ''
      ) {
         $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
      } else {

         // cargar archivo
         $archivo = $_FILES["imagen"]["tmp_name"];
         $destino = '../assets/img_productos/';
         $tipoArchivo = strtolower(pathinfo(
            $_FILES['imagen']['name'],
            PATHINFO_EXTENSION
         ));
         $arrProducto = $objproducto->registrarProducto(
            $codigo,
            $nombre,
            $detalle,
            $precio,
            $stock,
            $categoria,
            $img,
            $proveedor,
            $tipoArchivo
         );

         if ($arrProducto->id_n > 0) {
            $newid = $arrProducto->id_n;
            $arr_Respuesta = array(
               'status' => true,
               'mensaje' => 'Registro Exitoso'
            );
            $nombre = $arrProducto->id_n . "." . $tipoArchivo;

            if (move_uploaded_file($archivo, $destino . $nombre)) {
               $arr_imagen = $objproducto->actualizar_imagen(
                  $newid,
                  $nombre
               );
            } else {
               $arr_Respuesta = array(
                  'status' => true,
                  'mensaje' => 'Registro Exitoso'
               );
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
