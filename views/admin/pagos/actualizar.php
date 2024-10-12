<?php
require_once '../../controller/pagos_control.php';

$pagosControl = new PagosControl();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $pagos = $pagosControl->listarPagos();
    $pago = null;

    foreach ($pagos as $pag) {
        if ($pag['id'] == $id) {
            $pago = $pag;
            break;
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_venta = $_POST['id_venta'];
    $monto = $_POST['monto'];
    $fecha = $_POST['fecha'];
    $resultado = $pagosControl->actualizarPago($id, $id_venta, $monto, $fecha);
    echo $resultado['message'];
    // Redirigir a la lista de pagos o mostrar un mensaje
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Pago</title>
</head>
<body>
    <h1>Actualizar Pago</h1>
    <form method="POST">
        <label>ID Venta:</label>
        <input type="text" name="id_venta" value="<?php echo $pago['id_venta']; ?>" required>
        <br>
        <label>Monto:</label>
        <input type="text" name="monto" value="<?php echo $pago['monto']; ?>" required>
        <br>
        <label>Fecha:</label>
        <input type="date" name="fecha" value="<?php echo $pago['fecha']; ?>" required>
        <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>
