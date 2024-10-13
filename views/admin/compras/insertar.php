<?php  
require_once '../../../config/config.php';
require_once '../../../controller/compras_control.php';
require_once '../../../controller/producto_control.php';
require_once '../../../controller/persona_control.php';

$comprasControl = new ComprasControl();
$productoControl = new ProductoControl();
$personaControl = new PersonaControl();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar la inserción
    $data = [
        'id_producto' => $_POST['id_producto'],
        'cantidad' => $_POST['cantidad'],
        'precio' => $_POST['precio'],
        'id_trabajador' => $_POST['id_trabajador'],
    ];
    $comprasControl->insertarCompra($data);
    header('Location: listar.php'); // Redirigir después de la inserción
    exit();
}

$productos = $productoControl->listarProductos(); // Obtener todos los productos
$trabajadores = $personaControl->listarPersonas(); // Obtener todos los trabajadores
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Compra</title>
    <style>
        /* Agrega aquí tus estilos */
    </style>
</head>
<body>
    <a href="listar.php" class="btn-retroceder">Retroceder</a>
    <h2>Agregar Nueva Compra</h2>
    <form method="POST" action="">
        <label for="id_producto">Producto:</label>
        <select name="id_producto" required>
            <?php foreach ($productos as $producto): ?>
                <option value="<?php echo $producto['id']; ?>">
                    <?php echo $producto['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" required>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" required>

        <label for="id_trabajador">Trabajador:</label>
        <select name="id_trabajador" required>
            <?php foreach ($trabajadores as $trabajador): ?>
                <option value="<?php echo $trabajador['id']; ?>">
                    <?php echo $trabajador['razon_social']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Agregar</button>
    </form>
</body>
</html>
