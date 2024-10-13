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
            'indexadmin', // Agregar aquí la vista administrativa
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
        ];
    
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";
            } else {
                $contenido = "Error 404, no existe la vista";
            }
        } else {
            $contenido = "Error 404, no existe la vista";
        }
    
        return $contenido;
    }
    
}

?>