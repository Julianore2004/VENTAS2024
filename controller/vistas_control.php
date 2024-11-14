<?php

require_once "./model/vistas_model.php";

class vistasControlador extends vistaModelo{
    public function obtenerPlantillaControlador(){
        return require_once "./views/plantilla.php";
    }
    public function obtenerVistaControlador(){
        if (isset($_GET['views'])) {
            $ruta = explode("/",$_GET['views']);
            $respuesta = vistaModelo::obtener_vistas($ruta[0]);
        }else {
            $respuesta = "index.php";
        } 
    // Verificar si la ruta es para la vista administrativa
if ($ruta[0] == "admin") {
        $respuesta = "admin";
    }

    return $respuesta;
}

}  
?>
