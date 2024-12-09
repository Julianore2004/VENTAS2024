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
if ($tipo == "listar_producto") {
   //respuesta 
   $arr_Respuesta = array('status' => false, 'contenido' => '');
   $arr_Producto = $objproducto->obtener_productos();
   if (!empty($arr_Producto)) {

      for ($i = 0; $i < count($arr_Producto); $i++) {

         $id_categoria = $arr_Producto[$i]->id_categoria;
         $r_categoria = $objCategoria->obtener_categoria_por_id($id_categoria);
         $arr_Producto[$i]->categoria = $r_categoria ? $r_categoria : 'Sin categoría';

         $id_proveedor = $arr_Producto[$i]->id_proveedor;
         $r_proveedor = $objPersona->obtener_proveedor_por_id($id_proveedor);
         $arr_Producto[$i]->proveedor = $r_proveedor ? $r_proveedor : 'Sin proveedor';


         $id_Producto = $arr_Producto[$i]->id;
         $nombre = $arr_Producto[$i]->nombre;
         // LOCALHOST/editar-producto/4
         $opciones = '<a href="' . BASE_URL . 'editar-producto/' . $id_Producto . '" class="btn btn-success"><i class="fa fa-pencil"> </i> </a>
         <button onclick="eliminar_producto(' . $id_Producto . ');" class="btn btn-danger"><i class="fa fa-trash"></i></button>';

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
         $archivo = $_FILES["img"]["tmp_name"];
         $destino = '../assets/img_productos/';
         $tipoArchivo = strtolower(pathinfo(
            $_FILES['img']['name'],
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


            if (move_uploaded_file($archivo, $destino . '' . $nombre)) {
            } else {
               $arr_Respuesta = array('status' => true, 'mensaje' => 'Registro Exitoso, error al subir imagen');
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

if ($tipo == "ver_productos") {
   $id_Producto = $_POST['id_producto'];
   $arr_Respuesta = $objproducto->verProductos($id_Producto);
   if (empty($arr_Respuesta)) {
       $response = array('status' => false, 'mensaje' => 'Error, no hay información');
   } else {
       $response = array('status' => true, 'mensaje' => 'Datos encontrados', 'contenido' => $arr_Respuesta);
   }
   echo json_encode($response);
}



if ($tipo == "actualizar") {
   if ($_POST) {
       $id_Producto = $_POST['id_producto'];
       $codigo = $_POST['codigo'];
       $nombre = $_POST['nombre'];
       $detalle = $_POST['detalle'];
       $precio = $_POST['precio'];
       $categoria = $_POST['categoria'];
       $img = $_POST['img'];
       $proveedor = $_POST['proveedor'];

       if (
           $codigo == '' || $nombre == '' || $detalle == '' || $precio == '' ||
           $categoria == '' || $proveedor == ''
       ) {
           $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, campos vacios');
       } else {
           $arrProducto = $objproducto->editarProducto(
               $id_Producto,
               $codigo,
               $nombre,
               $detalle,
               $precio,
               $categoria,
               $img,
               $proveedor
           );
           if ($arrProducto) {
               $arr_Respuesta = array(
                   'status' => true,
                   'mensaje' => 'Registro Exitoso'
               );

               // Verificar si se ha subido un nuevo archivo
               if (!empty($_FILES['img']['tmp_name'])) {
                   $ruta_imagen = '../assets/img_productos/' . $img;
                   // Verificar si el archivo existe antes de intentar eliminarlo
                   if (file_exists($ruta_imagen)) {
                       unlink($ruta_imagen);
                   }

                   // Cargar el nuevo archivo
                   $archivo = $_FILES["img"]["tmp_name"];
                   $destino = '../assets/img_productos/';
                   $tipoArchivo = strtolower(pathinfo(
                       $_FILES['img']['name'],
                       PATHINFO_EXTENSION
                   ));
                   $nuevo_nombre_archivo = $id_Producto . '.' . $tipoArchivo;
                   if (move_uploaded_file($archivo, $destino . $nuevo_nombre_archivo)) {
                       // Actualizar el nombre de la imagen en la base de datos si es necesario
                       $objproducto->actualizar_imagen($id_Producto, $nuevo_nombre_archivo);
                   } else {
                       $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al subir la nueva imagen');
                   }
               }
           } else {
               $arr_Respuesta = array('status' => false, 'mensaje' => 'Error al actualizar el producto');
           }
       }

       echo json_encode($arr_Respuesta);
   }
}
if ($tipo == "eliminar_producto") {
   if ($_POST) {
       $id_producto = $_POST['id_producto'];
       $arrProducto = $objproducto->eliminarProducto($id_producto);

       if ($arrProducto) {
           $arr_Respuesta = array('status' => true, 'mensaje' => 'Eliminación Exitosa');
       } else {
           $arr_Respuesta = array('status' => false, 'mensaje' => 'Error, inténtelo de nuevo');
       }
       echo json_encode($arr_Respuesta);
   }
}