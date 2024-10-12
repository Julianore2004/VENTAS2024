<?php
require_once '../../controller/venta_control.php';

$ventaControl = new VentaControl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $persona = $_POST['persona'];
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];
    $resultado = $ventaControl->insertarVenta($persona, $fecha, $total);
    echo $resultado['message'];
    // Redirigir a la lista de ventas o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Venta</title>
</head>
<body>
    <h1>Insertar Nueva Venta</h1>
    <form method="POST">
        <label>Persona:</label>
        <input type="text" name="persona" required>
        <br>
        <label>Fecha:</label>
        <input type="datetime-local" name="fecha" required>
        <br>
        <label>Total:</label>
        <input type="text" name="total" required>
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
