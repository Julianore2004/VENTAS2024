<?php  
require_once '../../../config/config.php';
require_once '../../../controller/compras_control.php';
require_once '../../../controller/producto_control.php';
require_once '../../../controller/persona_control.php';

$comprasControl = new ComprasControl();
$productoControl = new ProductoControl();
$personaControl = new PersonaControl();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Procesar la actualización
    $id = $_POST['id']; // Obtener el ID de la compra a actualizar
    $data = [
        'id_producto' => $_POST['id_producto'],
        'cantidad' => $_POST['cantidad'],
        'precio' => $_POST['precio'],
        'id_trabajador' => $_POST['id_trabajador'],
    ];
    $comprasControl->actualizarCompra($id, $data); // Llamar al método para actualizar
    header('Location: listar.php'); // Redirigir después de la actualización
    exit();
}

// Obtener el ID de la compra a actualizar
$compraId = $_GET['id'];
$compra = $comprasControl->listarCompras($compraId); // Obtener los datos de la compra

// Verificar si la compra existe
if (!$compra) {
    echo "Compra no encontrada.";
    exit(); // Detener la ejecución si no se encuentra la compra
}

// Depuración: mostrar contenido de la compra
// Descomentar la siguiente línea para ver qué hay en $compra
// var_dump($compra); 

// Obtener todos los productos y trabajadores
$productos = $productoControl->listarProductos();
$trabajadores = $personaControl->listarPersonas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Compra</title>
    <style>
        /* Estilos Generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        /* Otros estilos... */
    </style>
</head>
<body>
    <a href="listar.php" class="btn-retroceder">Retroceder</a>
    <h2>Actualizar Compra</h2>
    
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $compra['id']; ?>"> <!-- Campo oculto para el ID -->
        
        <label for="id_producto">Producto:</label>
        <select name="id_producto" required>
            <?php foreach ($productos as $producto): ?>
                <option value="<?php echo $producto['id']; ?>" <?php echo $producto['id'] == $compra['id_producto'] ? 'selected' : ''; ?>>
                    <?php echo $producto['nombre']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="<?php echo $compra['cantidad']; ?>" required>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" value="<?php echo $compra['precio']; ?>" required>

        <label for="id_trabajador">Trabajador:</label>
        <select name="id_trabajador" required>
            <?php foreach ($trabajadores as $trabajador): ?>
                <option value="<?php echo $trabajador['id']; ?>" <?php echo $trabajador['id'] == $compra['id_trabajador'] ? 'selected' : ''; ?>>
                    <?php echo $trabajador['razon_social']; ?>
                </option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

