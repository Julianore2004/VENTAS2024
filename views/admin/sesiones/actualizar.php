<?php
require_once '../../controller/sesiones_control.php';

$sesionesControl = new SesionesControl();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sesiones = $sesionesControl->listarSesiones();
    $sesion = null;

    foreach ($sesiones as $ses) {
        if ($ses['id'] == $id) {
            $sesion = $ses;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];
    $resultado = $sesionesControl->actualizarSesion($id, $usuario, $fecha_inicio, $fecha_fin);
    echo $resultado['message'];
    // Redirigir a la lista de sesiones o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Sesión</title>
</head>
<body>
    <h1>Actualizar Sesión</h1>
    <form method="POST">
        <label>Usuario:</label>
        <input type="text" name="usuario" value="<?php echo $sesion['usuario']; ?>" required>
        <br>
        <label>Fecha Inicio:</label>
        <input type="datetime-local" name="fecha_inicio" value="<?php echo $sesion['fecha_inicio']; ?>" required>
        <br>
        <label>Fecha Fin:</label>
        <input type="datetime-local" name="fecha_fin" value="<?php echo $sesion['fecha_fin']; ?>" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
