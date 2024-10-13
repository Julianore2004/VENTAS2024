<?php
require_once "./config/config.php";
require_once "./controller/vistas_control.php";

$mostrar = new vistasControlador();
$vista = $mostrar->obtenerVistaControlador();

if ($vista == "login" || $vista == "404") {
    require_once "./views/$vista.php";
} elseif ($vista == "indexadmin") {
    // Cargar directamente la vista administrativa sin header y footer
    include "./views/admin/indexadmin.php";
} else {
    include "./views/include/header.php";
    include $vista;
    include "./views/include/footer.php";
}
?>
