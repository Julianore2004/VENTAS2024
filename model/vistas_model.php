<?php
session_start();
class vistaModelo
{

    protected static function obtener_vistas($vista)
    {
        $palabras_permitidas = [
            'login',
            'usuarios',
            'nuevo-usuario',
            'modificar-usuario',
            'productos',
            'nuevo-producto',
            'producto',
            'carrito',
            'index',
            'ofertas',
            'novedades',
            'miperfil',
            'accesorios',
            'celularessamsung',
            'detalleproducto',
            'comentarios',
            'detalleaccesorio',
            'centroayuda',
            'registrarse',
            'nuevo-producto',
            'nueva-categoria',
            'nueva-compra',
            'nueva-persona',
           
            'principal',
            'productos',
            'categorias',
            'personas',
            'compras',
            'listar-compras',
            'editar-producto',
            'editar-categoria',
            'editar-persona',
            'editar-compra',
           
        ];
          if (!isset($_SESSION['sesion_venta_id'])) {
            return "login";
         }

        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";

            } else {
                       
                $contenido = "404";
            }
        } elseif ($vista == "admin") {
            $contenido = "admin";
        
            
        }else{

            $contenido = "404";
        }
        return $contenido;
    }
}