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
            'personas',
            'compras',
        ];
        /*   if (!isset($_SESSION['sesion_venta_id'])) {
            return "login";
         } */
        // Comprobar si la vista es permitida
        if (in_array($vista, $palabras_permitidas)) {
            // Ruta específica para admin
            if ($vista === 'admin') {
                return "./views/admin/admin.php";
            }
            
            // Verificar si el archivo de la vista existe
            if (is_file("./views/" . $vista . ".php")) {
                return "./views/" . $vista . ".php";
            }
            return "404"; // Vista no encontrada
        }
        return ($vista === "index" || $vista === "login") ? "login" : "404";
    }

}
