<?php
require_once '../../controller/det_venta_control.php';

$detVentaControl = new DetVentaControl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_venta = $_POST['id_venta'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $resultado = $detVentaControl->insertarDetVenta($id_venta, $id_producto, $cantidad, $precio);
    echo $resultado['message'];
    // Redirigir a la lista de detalles de venta o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Detalle de Venta</title>
</head>
<body>
    <h1>Insertar Nuevo Detalle de Venta</h1>
    <form method="POST">
        <label>ID Venta:</label>
        <input type="text" name="id_venta" required>
        <br>
        <label>ID Producto:</label>
        <input type="text" name="id_producto" required>
        <br>
        <label>Cantidad:</label>
        <input type="text" name="cantidad" required>
        <br>
        <label>Precio:</label>
        <input type="text" name="precio" required>
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
