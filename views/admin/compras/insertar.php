<?php
require_once '../../controller/compras_control.php';

$comprasControl = new ComprasControl();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener los datos del formulario
    // Ejecutar la inserción
    // Redirigir o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Compra</title>
</head>
<body>
    <h1>Insertar Nueva Compra</h1>
    <form method="POST">
        <label>ID Producto:</label>
        <input type="text" name="id_producto" required>
        <br>
        <label>Cantidad:</label>
        <input type="text" name="cantidad" required>
        <br>
        <label>Precio:</label>
        <input type="text" name="precio" required>
        <br>
        <label>Fecha:</label>
        <input type="date" name="fecha_compra" required>
        <br>
        <label>ID Trabajador:</label>
        <input type="text" name="id_trabajador" required>
        <br>
        <input type="submit" value="Insertar">
    </form>
</body>
</html>
