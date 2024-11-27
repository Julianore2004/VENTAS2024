<?php

require_once "./model/vistas_model.php";

class vistasControlador extends vistaModelo
{
    public function obtenerPlantillaControlador()
    {
        return require_once "./views/plantilla.php";
    }

    public function obtenerVistaControlador()
    {
        if (isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            // Obtener la vista correspondiente desde el modelo
            $respuesta = vistaModelo::obtener_vistas($ruta[0]);

            // Si la vista es "admin", establecer directamente
            if ($ruta[0] === "admin") {
                $respuesta = "admin";
            }
        } else {
            // Vista predeterminada cuando no se define una en la URL
            $respuesta = "login";
        }

        return $respuesta;
    }
}
