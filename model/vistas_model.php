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
            'principal',
            'listar-compras',
           
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
        } elseif (in_array($vista, ['categorias', 'editar-categoria', 'nueva-categoria', 'compras', 'productos','personas','nuevo-producto','nueva-compra','nueva-persona', 'editar-producto','editar-persona','editar-compra'])) {
            $contenido = "admin/" . $vista;
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
