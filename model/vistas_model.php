<?php

class vistaModelo
{

    protected static function obtener_vista($vista)
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
            'comentarios'
        ];
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";

            } else {
                $contenido = "Error 404, no existe la vista";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } elseif ($vista == "carrito") {
            $contenido = "carrito";
        } else {
            $contenido = "Error 404, no existe la vista";
        }
        return $contenido;
    }
}

?>