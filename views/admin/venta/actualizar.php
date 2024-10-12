<?php
require_once '../../controller/venta_control.php';

$ventaControl = new VentaControl();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $ventas = $ventaControl->listarVentas();
    $venta = null;

    foreach ($ventas as $vent) {
        if ($vent['id'] == $id) {
            $venta = $vent;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $persona = $_POST['persona'];
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];
    $resultado = $ventaControl->actualizarVenta($id, $persona, $fecha, $total);
    echo $resultado['message'];
    // Redirigir a la lista de ventas o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Venta</title>
</head>
<body>
    <h1>Actualizar Venta</h1>
    <form method="POST">
        <label>Persona:</label>
        <input type="text" name="persona" value="<?php echo $venta['persona']; ?>" required>
        <br>
        <label>Fecha:</label>
        <input type="datetime-local" name="fecha" value="<?php echo $venta['fecha']; ?>" required>
        <br>
        <label>Total:</label>
        <input type="text" name="total" value="<?php echo $venta['total']; ?>" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
