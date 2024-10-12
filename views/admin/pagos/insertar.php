<?php
require_once '../../controller/pagos_control.php';

$pagosControl = new PagosControl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_venta = $_POST['id_venta'];
    $monto = $_POST['monto'];
    $fecha = $_POST['fecha'];
    $resultado = $pagosControl->insertarPago($id_venta, $monto,  $fecha);
    echo $resultado['message'];
    // Redirigir a la lista de pagos o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Pago</title>
</head>
<body>
    <h1>Insertar Nuevo Pago</h1>
    <form method="POST">
        <label>ID Venta:</label>
        <input type="text" name="id_venta" required>
        <br>
        <label>Monto:</label>
        <input type="text" name="monto" required>
        <br>
        <label>Fecha:</label>
        <input type="date" name="fecha" required>
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
