<?php
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
            'admin'
        ];
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "404";
            }
        } elseif ($vista == "index" || $vista == "index") {
            $contenido = "index";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}

?>
