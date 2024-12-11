<?php
require_once "./config/config.php";
require_once "./controller/vistas_control.php";
$mostrar = new vistasControlador();
$vista = $mostrar->obtenerVistaControlador();

if ($vista == "404" || $vista == "login") {
    require_once "./views/$vista.php";
} elseif ($vista == "admin" || strpos($vista, 'admin/') === 0) {
    // Cargar directamente la vista administrativa sin header y footer
    include "./views/admin/admin.php";
} else {
    include "./views/include/header.php";
    include $vista;
    include "./views/include/footer.php";
}
?>
