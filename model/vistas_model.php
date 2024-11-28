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
            'admin',
            'principal',
            'productos',
            'categorias',
            'personasL',
            'compras',
        ];
        /*   if (!isset($_SESSION['sesion_venta_id'])) {
            return "login";
         } */

        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "index" || $vista == "login") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }

    protected static function obtener_vistasAdmin($vista)
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
            'admin',
            'principal',
            'productos',
            'categorias',
            'personas',
            'compras',
        ];
        /*   if (!isset($_SESSION['sesion_venta_id'])) {
            return "login";
         } */

        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./admin/" . $vista . ".php")) {
                $contenido = "./admin/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "admin") {
            $contenido = "admin";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
