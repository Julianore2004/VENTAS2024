<?php

class vistaModelo
{

    protected static function obtener_vista($vista)
    {
        $palabras_permitidas = ['login', 'usuario', 'producto'];
        if (in_array($vista, $palabras_permitidas)) {
            if (is_file("./views/" . $vista . ".php")) {
                $contenido = "./views/" . $vista . ".php";

            } else {
                $contenido = "Error 404, no existe la vista";
            }
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";

        } else {
            $contenido = "Error 404, no existe la vista";
        }
        return $contenido;
    }
}

?>