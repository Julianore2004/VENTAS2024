<?php
require_once '../../controller/det_venta_control.php';

$detVentaControl = new DetVentaControl();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $detVentas = $detVentaControl->listarDetVentas();
    $detVenta = null;

    foreach ($detVentas as $det) {
        if ($det['id'] == $id) {
            $detVenta = $det;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_venta = $_POST['id_venta'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $resultado = $detVentaControl->actualizarDetVenta($id, $id_venta, $id_producto, $cantidad, $precio);
    echo $resultado['message'];
    // Redirigir a la lista de detalles de venta o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Detalle de Venta</title>
</head>
<body>
    <h1>Actualizar Detalle de Venta</h1>
    <form method="POST">
        <label>ID Venta:</label>
        <input type="text" name="id_venta" value="<?php echo $detVenta['id_venta']; ?>" required>
        <br>
        <label>ID Producto:</label>
        <input type="text" name="id_producto" value="<?php echo $detVenta['id_producto']; ?>" required>
        <br>
        <label>Cantidad:</label>
        <input type="text" name="cantidad" value="<?php echo $detVenta['cantidad']; ?>" required>
        <br>
        <label>Precio:</label>
        <input type="text" name="precio" value="<?php echo $detVenta['precio']; ?>" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
